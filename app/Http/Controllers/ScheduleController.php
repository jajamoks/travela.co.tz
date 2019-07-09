<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Route;
use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        $busses = Bus::all();
        $schedules = Schedule::all();
        return view('schedulers.index')->with('schedules', $schedules)
        ->with('busses', $busses);
    }

    public function create()
    {
        $routes = Route::all();
        $busses = Bus::all();
        return view('schedulers.scheduleTrip')
        ->with('routes', $routes)
        ->with('busses', $busses);


    }

    public function store(Request $request)
    {
        $schedule = Schedule::create($request->only(
            'route_id', 'bus_id', 'scheduledDate'
        ));
        $schedule->save();

        $routeId = Route::find($schedule->id);
        $schedule->routes()->attach($routeId);

        return redirect('admin/schedules');
    }

    public function destroy($id)
    {
        $schedule = Schedule::find($id);
        $routeId = Route::find($schedule->id);
        
        $schedule->delete();      
        $schedule->routes()->detach($routeId);

        return redirect('admin/schedules');
    }
}
