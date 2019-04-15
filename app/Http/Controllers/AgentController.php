<?php

namespace App\Http\Controllers;

use App\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {
      $agents = Agent::all();
      return view('agents')->with('agents', $agents);
    }

    public function create(Request $request)
    {
      $agent = Agent::create($request->only(
        'name', 'email','number'
      ));
      $agent->save();

      return view('agents');

    }
    public function store(Request $request)
    {
        //
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
