<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

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
        return view('cart.cart', compact('cartItems'));
    }

    public function checkout()
    {
        $cartItems = Cart::where('users_id', auth()->id())->get();

        foreach ($cartItems as $item) {
            Booking::create([
                'product_id'     => $item->product_id,
                'name'           => $item->name,
                'phone'          => $item->phone,
                'email'          => $item->email,
                'address'        => $item->address,
                'start_date'     => $item->start_date,
                'end_date'       => $item->end_date,
            ]);
        }

        // Kosongkan cart user
        Cart::where('users_id', auth()->id())->delete();

        return redirect()->route('cart.index')->with('success', 'Checkout berhasil, booking sudah tercatat.');
    }
}
