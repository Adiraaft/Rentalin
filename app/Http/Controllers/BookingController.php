<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Midtrans\Config;
use Midtrans\Snap;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('product')->get();
        return view('admin.bookings', compact('bookings'));
    }
    public function store(Request $request, $productId)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after_or_equal:start_date',
            'name'       => 'required|string',
            'phone'      => 'required|string|max:15',
            'email'      => 'required|email',
            'address'    => 'required|string',
        ]);

        $product = Product::findOrFail($productId);
        $start = new \Carbon\Carbon($request->start_date);
        $end   = new \Carbon\Carbon($request->end_date);
        $days  = $start->diffInDays($end) + 1;
        $total = $days * $product->price;

        Cart::create([
            'users_id'   => auth()->id(),
            'product_id' => $productId,
            'start_date' => $request->start_date,
            'end_date'   => $request->end_date,
            'name'       => $request->name,
            'phone'      => $request->phone,
            'email'      => $request->email,
            'address'    => $request->address,
            'total_price' => $total,
        ]);

        return redirect()->route('cart.index')->with('success', 'Berhasil ditambahkan ke keranjang!');
    }

    public function cart()
    {
        $cartItems = Cart::where('users_id', auth()->id())->with('product')->get();

        // Jika ada data Midtrans, siapkan token
        if ($cartItems->isNotEmpty()) {
            \Midtrans\Config::$serverKey = config('midtrans.server_key');
            \Midtrans\Config::$clientKey = config('midtrans.client_key');
            \Midtrans\Config::$isProduction = config('midtrans.is_production');

            $total = $cartItems->sum('total_price');
            $params = [
                'transaction_details' => [
                    'order_id' => 'ORDER-' . uniqid(),
                    'gross_amount' => $total,
                ],
                'customer_details' => [
                    'first_name' => auth()->user()->name,
                    'email' => auth()->user()->email,
                ]
            ];

            $snapToken = \Midtrans\Snap::getSnapToken($params);
        } else {
            $snapToken = null;
        }

        return view('cart.cart', compact('cartItems', 'snapToken'));
    }


    public function checkout()
    {
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$clientKey = config('midtrans.client_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');

        $cartItems = Cart::where('users_id', auth()->id())->with('product')->get();
        $total = $cartItems->sum('total_price');

        // ✅ Cek jika cart kosong atau total 0
        if ($cartItems->isEmpty() || $total < 1) {
            return redirect()->route('cart.index')->with('error', 'Keranjang kosong atau total tidak valid.');
        }

        $orderId = 'ORDER-' . uniqid();

        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $total,
            ],
            'customer_details' => [
                'first_name' => auth()->user()->name,
                'email' => auth()->user()->email,
            ]
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('cart.cart', compact('cartItems', 'snapToken'));
    }

    public function paymentCallback(Request $request)
    {
        $cartItems = Cart::where('users_id', auth()->id())->get();

        foreach ($cartItems as $item) {
            Booking::create([
                'product_id'   => $item->product_id,
                'name'         => $item->name,
                'phone'        => $item->phone,
                'email'        => $item->email,
                'address'      => $item->address,
                'start_date'   => $item->start_date,
                'total_price'  => $item->total_price,
                'end_date'     => $item->end_date,
                'status'       => 'pending',
            ]);
        }

        // Setelah selesai, kosongkan keranjang
        Cart::where('users_id', auth()->id())->delete();

        return response()->json(['message' => 'Booking berhasil disimpan']);
    }


    public function destroy($id)
    {
        $item = Cart::findOrFail($id);

        // Opsional: pastikan hanya user yg punya yang bisa hapus
        if ($item->users_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $item->delete();

        return redirect()->route('cart.index')->with('success', 'Item berhasil dihapus dari keranjang.');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after_or_equal:start_date',
            'name'       => 'required|string',
            'phone'      => 'required|string|max:15',
            'email'      => 'required|email',
            'address'    => 'required|string',
        ]);

        $cart = Cart::findOrFail($id);

        // Opsional: hanya user pemilik yg boleh edit
        if ($cart->users_id !== auth()->id()) {
            abort(403);
        }

        $cart->update([
            'start_date' => $request->start_date,
            'end_date'   => $request->end_date,
            'name'       => $request->name,
            'phone'      => $request->phone,
            'email'      => $request->email,
            'address'    => $request->address,
        ]);

        return redirect()->route('cart.index')->with('success', 'Item berhasil diupdate.');
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,diproses,berlangsung,selesai,dibatalkan'
        ]);

        $booking = Booking::findOrFail($id);
        $booking->status = $request->status;
        $booking->save();

        return back()->with('success', 'Status booking diperbarui menjadi: ' . ucfirst($request->status));
    }
    public function laporanView()
    {
        return view('admin.laporan');
    }

    public function laporanAjax(Request $request)
    {
        $query = Booking::with('product');

        if ($request->start_date) {
            $query->whereDate('start_date', '>=', $request->start_date);
        }

        if ($request->end_date) {
            $query->whereDate('end_date', '<=', $request->end_date);
        }

        if ($request->status) {
            $query->where('status', $request->status);
        }

        $bookings = $query->get()->map(function ($booking) {
            $start = \Carbon\Carbon::parse($booking->start_date);
            $end = \Carbon\Carbon::parse($booking->end_date);
            $days = $start->diffInDays($end) + 1;

            return [
                'name' => $booking->name,
                'start_date' => $booking->start_date,
                'end_date' => $booking->end_date,
                'status' => $booking->status,
                'product' => [
                    'title' => $booking->product->title ?? '-',
                ],
                'total_price' => $days * ($booking->product->price ?? 0),
            ];
        });

        return response()->json($bookings);
    }
}
