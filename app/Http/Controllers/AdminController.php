<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Product;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return redirect()->route('admin.dashboard');
    }
    public function dashboard()
    {
        $totalProduk = Product::count();
        $bookingAktif = Booking::whereIn('status', ['pending', 'diproses', 'berlangsung'])->count();
        $totalPelanggan = User::where('role', 'customer')->count();

        $bulanIni = Carbon::now()->format('Y-m');
        $laporanBulanIni = Booking::with('product')->get()->filter(function ($booking) use ($bulanIni) {
            return \Carbon\Carbon::parse($booking->created_at)->format('Y-m') === $bulanIni;
        })->sum(function ($booking) {
            $start = \Carbon\Carbon::parse($booking->start_date);
            $end = \Carbon\Carbon::parse($booking->end_date);
            $days = $start->diffInDays($end) + 1;
            return $booking->product ? $days * $booking->product->price : 0;
        });

        $bookingTerbaru = Booking::with('product')->latest()->take(3)->get();

        return view('admin.dashboard', compact(
            'totalProduk',
            'bookingAktif',
            'totalPelanggan',
            'laporanBulanIni',
            'bookingTerbaru'
        ));
    }
    public function chartData()
    {
        $data = [];

        // Ambil data 6 bulan terakhir
        for ($i = 5; $i >= 0; $i--) {
            $date = Carbon::now()->subMonths($i);
            $monthYear = $date->format('M Y');

            $jumlahBooking = Booking::whereYear('created_at', $date->year)
                ->whereMonth('created_at', $date->month)
                ->count();

            $data['labels'][] = $monthYear;
            $data['values'][] = $jumlahBooking;
        }

        return response()->json($data);
    }
    public function kelolaAkun(Request $request)
    {
        $filter = $request->get('filter'); // admin / customer / null
        $users = User::query();

        if ($filter === 'admin' || $filter === 'customer') {
            $users->where('role', $filter);
        }

        return view('admin.kelola-akun', [
            'users' => $users->latest()->get(),
            'filter' => $filter
        ]);
    }

    public function tambahAkun(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'admin',
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.kelola-akun')->with('success', 'Akun admin berhasil ditambahkan.');
    }
}
