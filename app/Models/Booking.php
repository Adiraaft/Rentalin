<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'start_date',
        'end_date',
        'name',
        'email',
        'phone',
        'address',
        'total_price',
        'status' // 'pending', 'paid', 'cancelled'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
