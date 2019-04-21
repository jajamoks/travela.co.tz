<?php

namespace App\Http\Controllers;

use App\Route;
use App\Ticket;
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
      $passanger = Passanger::create($request->only(
        'name', 'number'
      ));
      $passanger->save();

      return redirect('admin/busses');
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
