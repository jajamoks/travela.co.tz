<?php

namespace App\Http\Controllers;

use App\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function index()
    {
        return view('passengers.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Passenger $passenger)
    {
        //
    }

    public function edit(Passenger $passenger)
    {
        //
    }

    public function update(Request $request, Passenger $passenger)
    {
        //
    }

    public function destroy(Passenger $passenger)
    {
        //
    }
}
