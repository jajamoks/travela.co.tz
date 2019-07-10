<?php
namespace App\Http\Controllers;

use App\Bus;
use App\User;
use App\Route;
use App\Ticket;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
      $user = User::findOrFail($request->user()->id);
      $total_earnings = Ticket::All()->sum('price');
      $total_tickets = Ticket::All()->count();
      $total_staffs = User::All()->count();
      $total_busses = Bus::All()->count();
      $tickets = Ticket::all();
      $ticket = Ticket::all();

      return view('dashboard')
      ->with('user', $user)
      ->with('tickets', $tickets)
      ->with('total_staffs', $total_staffs)
      ->with('total_busses', $total_busses)
      ->with('total_tickets', $total_tickets)
      ->with('total_earnings', $total_earnings);
    }
}
