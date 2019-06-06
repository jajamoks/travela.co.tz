<?php

namespace App\Http\Controllers;

use App\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{

    public function index()
    {
      $route = Route::All();
      return view('routes.index')
      ->with('route',$route);
    }

    public function create()
    {
      return view('routes.addRoute');
    }

    public function store(Request $request)
    {
      $route = Route::create($request->only(
        'arrival_time', 'departure_time',
        'fromPlace', 'toPlace'
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
