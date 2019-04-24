<?php

namespace App\Http\Controllers;

use App\Route;
use App\Ticket;
use App\Passenger;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
      $tickets = Ticket::all();
      $passengers = Passenger::all();
      return view('tickets.index')->with('tickets', $tickets)
      ->with('passengers', $passengers);
    }

    public function create()
    {
      $routes = Route::all();
      return view('tickets.newTicket')->with('routes', $routes);
    }

    public function store(Request $request)
    {
      $passenger = Passenger::create($request->only(
        'name', 'number', 'email'
      ));
      $passenger->save();

      Ticket::create([
        'passenger_id' => $passenger->id,
        'issuedBy' => $request->input('issuedBy'),
        'route_id' => $request->input('route_id'),
        'bookedDate' => $request->input('bookedDate'),
        'additionalInfo' => $request->input('additionalInfo'),
      ]);

      return redirect('admin/tickets');
    }

    public function show(Ticket $ticket)
    {
        //
    }

    public function edit(Ticket $ticket)
    {
        //
    }

    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    public function destroy(Ticket $ticket)
    {
        //
    }
}
