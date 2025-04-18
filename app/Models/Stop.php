<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    use HasFactory;

    protected $fillable = ['trip_id', 'station_name', 'arrival_time'];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
