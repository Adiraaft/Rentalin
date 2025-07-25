<?php

namespace App\Exports;

use App\Models\Booking;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Carbon\Carbon;

class BookingExport implements FromView
{
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function view(): View
    {
        $query = Booking::with('product');

        if ($this->request->start_date) {
            $query->whereDate('start_date', '>=', $this->request->start_date);
        }

        if ($this->request->end_date) {
            $query->whereDate('end_date', '<=', $this->request->end_date);
        }

        if ($this->request->status) {
            $query->where('status', $this->request->status);
        }

        $bookings = $query->get();

        foreach ($bookings as $booking) {
            $days = Carbon::parse($booking->start_date)->diffInDays($booking->end_date) + 1;
            $booking->total_price = $days * ($booking->product->price ?? 0);
        }

        return view('admin.laporan_excel', compact('bookings'));
    }
}
