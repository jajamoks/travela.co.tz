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
      return view('tickets.index')->with('tickets', $tickets);
    }

    public function create()
    {
      $routes = Route::all();
      return view('tickets.newTicket')->with('routes', $routes);
    }

    public function store(Request $request)
    {
      $passanger = Passenger::create($request->only(
        'name', 'number', 'email'
      ));
      $passanger->save();

      $ticket = Ticket::create($request->only(
        'bookedDate', 'additionalInfo', 'route_id',
        'issuedBy', 'passenger_id'
      ));

      $ticket->passenger_id == $passanger->id;

      $ticket->save();

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
