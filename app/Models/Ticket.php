<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'trip_id', 'seat_number', 'passenger_name', 'passport_data', 'tariff_id', 'price'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function tariff()
    {
        return $this->belongsTo(Tariff::class);
    }
}
