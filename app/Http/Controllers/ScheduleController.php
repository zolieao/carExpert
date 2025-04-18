<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Trip;
use App\Models\BusStation; 

class ScheduleController extends Controller
{
    public function show(Request $request)
    {
$start = $request->start;
        $end = $request->end;
        $date = $request->date;

        // Получаем начальную станцию
        $startStation = BusStation::where('city', $start)->first();

        if (!$startStation) {
            return response()->json(['error' => 'Начальный автовокзал не найден'], 404);
        }

        // Получаем рейсы, которые начинаются с этой станции и имеют нужную конечную остановку
        $trips = Trip::where('departure_station_id', $startStation->id)
            ->whereDate('departure_time', $date)
            ->whereHas('stops', function ($query) use ($end) {
                $query->where('station_name', $end);
            })
            ->with(['departureStation', 'stops'])
            ->get();

        if ($trips->isEmpty()) {
            return response()->json(['message' => 'Нет рейсов на указанную дату'], 404);
        }

        return view('schedule', compact('trips'));
    }
}
