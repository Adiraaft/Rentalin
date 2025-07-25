<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return redirect()->route('admin.dashboard');
    }
    public function dashboard()
    {
        $totalProduk = Product::count();
        $bookingAktif = Booking::where('status', '!=', 'selesai')->count();
        $totalPelanggan = Booking::distinct('email')->count('email');

        $laporanBulanIni = Booking::whereMonth('created_at', now()->month)
            ->sum(DB::raw('(DATEDIFF(end_date, start_date) + 1) * price_per_day'));


        $bookingTerbaru = Booking::with('product')->latest()->take(5)->get();

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
        $data = Booking::select(
            DB::raw('DATE_FORMAT(created_at, "%b %Y") as bulan'),
            DB::raw('COUNT(*) as total')
        )
            ->groupBy('bulan')
            ->orderBy(DB::raw('MIN(created_at)'), 'asc')
            ->get();

        return response()->json([
            'labels' => $data->pluck('bulan'),
            'values' => $data->pluck('total'),
        ]);
    }

}
