<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Seat;
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
      $bus = Bus::create($request->only('name', 'type','registrationNumber','seats'));
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

    public function destroy($id){
        $bus = Bus::find($id);
        $bus->delete();
            
        return redirect('admin/busses');
    }
}
