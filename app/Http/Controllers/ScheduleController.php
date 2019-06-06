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
        $schedules = Schedule::all();
        return view('schedulers.index')->with('schedules', $schedules);
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
        $schedule = Schedule::create($request->only('route_id', 'bus_id','scheduledDate'));
        $schedule->save();

        return redirect('admin/schedules');
    }

    public function show(Schedule $schedule)
    {
        //
    }

    public function edit(Schedule $schedule)
    {
        //
    }

    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    public function destroy(Schedule $schedule)
    {
        //
    }
}
