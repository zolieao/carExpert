<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $fillable = ['bus_station_id', 'destination',];

    public function busStation()
    {
        return $this->belongsTo(BusStation::class);
    }

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
}
