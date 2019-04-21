<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{

    public function index()
    {
      $bus = Bus::All();
      $route = Route::All();
      return view('routes.index')
      ->with('bus',$bus)
      ->with('route',$route);
    }

    public function create()
    {
      $bus = Bus::All();
      return view('routes.add_route')->with('bus',$bus);
    }

    public function store(Request $request)
    {
      $route = Route::create($request->only(
        'bus_name', 'arrival_time',
        'departure_time', 'fromPlace', 'toPlace'
      ));
      $route->save();

      return redirect('admin/routes');
    }

    public function show(Route $route)
    {
        //
    }

    public function edit(Route $route)
    {
        //
    }

    public function update(Request $request, Route $route)
    {
        //
    }

    public function destroy(Route $route)
    {
        //
    }
}
