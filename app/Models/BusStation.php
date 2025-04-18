<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusStation extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'city'];

    public function routes()
    {
        return $this->hasMany(Route::class);
    }
}
