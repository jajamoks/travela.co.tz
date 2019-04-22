<?php

namespace App\Http\Controllers;

use App\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{

    public function index()
    {
      $bus = Bus::All();
      return view('busses.index')->with('bus',$bus);
    }

    public function create()
    {
        return view('busses.addBus');
    }

    public function store(Request $request)
    {
      $bus = Bus::create($request->only('name', 'type','registration_number','seats'));
      $bus->save();

      return redirect('admin/busses');
    }

    public function show(Bus $bus)
    {
        //
    }

    public function edit(Bus $bus)
    {
        //
    }

    public function update(Request $request, Bus $bus)
    {
        //
    }

    public function destroy(Bus $bus)
    {
        //
    }
}
