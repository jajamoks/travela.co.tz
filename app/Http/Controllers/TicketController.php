<?php

namespace App\Http\Controllers;

use App\Seat;
use App\Route;
use App\Ticket;
use App\Passenger;
use App\Mail\Receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
      $all_seats = Seat::all();
      $seats = Seat::all()->where('status', 'Available');
      return view('tickets.newTicket')->with('seats', $seats)
      ->with('routes', $routes)->with('all_seats', $all_seats);
    }

    public function store(Request $request)
    {
      $passenger = new Passenger;
      $passenger->name = $request->name;
      $passenger->number = $request->number;
      $passenger->email = $request->email;
      $passenger->save();

      $passenger->ticket_id = $passenger->id;
      $passenger->save();
   
      Ticket::create([
        'passenger_id' => $passenger->id,
        'issuedBy' => $request->input('issuedBy'),
        'route_id' => $request->input('route_id'),
        'bookedDate' => $request->input('bookedDate'),
        'additionalInfo' => $request->input('additionalInfo'),
      ]);

      $seatId = $request->seat_id;
      $seat= Seat::find($seatId);
      $seat->update([
        'status' => 'Booked',
      ]);

      Mail::to($request->email)->send(new Receipt($passenger));

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
