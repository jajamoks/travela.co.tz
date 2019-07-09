<?php

namespace App\Http\Controllers;

use App\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
      $agents = Agent::all();
      return view('agents.index')->with('agents', $agents);
    }

    public function create(Request $request)
    {
      return view('agents.addAgent');

    }
}
