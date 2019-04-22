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
      return view('tickets.new_ticket')->with('routes', $routes);
    }

    public function store(Request $request)
    {
      $passanger = Passenger::create($request->only(
        'name', 'number', 'email'
      ));
      $passanger->save();

      $ticket = Ticket::create($request->only(
        'bookedDate', 'additionalInfo', 'issuedBy',
        'issuedOn', ''
      ));

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
