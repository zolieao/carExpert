<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = ['route_id', 'departure_time', 'arrival_time', 'platform', 'bus_type'];

    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function stops()
    {
        return $this->hasMany(Stop::class);
    }

    public function tariffs()
    {
        return $this->hasMany(Tariff::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
