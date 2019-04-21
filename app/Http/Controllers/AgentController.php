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
      return view('agents.add_agent');

    }
    public function store(Request $request)
    {
      $agents = Agent::all();
      $agent = Agent::create($request->only(
        'name', 'email','number','city'
      ));
      $agent->save();
      return view('agents.index')->with('agents', $agents);
    }

    public function show(Agent $agent)
    {
        //
    }

    public function edit(Agent $agent)
    {
        //
    }

    public function update(Request $request, Agent $agent)
    {
        //
    }

    public function destroy(Agent $agent)
    {
        //
    }
}
