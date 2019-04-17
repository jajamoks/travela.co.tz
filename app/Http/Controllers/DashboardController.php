<?php
namespace App\Http\Controllers;

use App\User;
use App\Agent;
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
      $total_agents = Agent::All()->count();
      return view('dashboard')
      ->with('user', $user)
      ->with('total', $total_agents);
    }
}
