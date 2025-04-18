<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\SalesPoint;


class PointController extends Controller
{
    public function show(){
    $id = Auth::id();
    $points = SalesPoint::all();
    return view('Pages.points', compact('points'));
    }
}
