<?php

namespace App\Http\Controllers;

use App\Route;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //   $this->middleware('auth');
    // }

    public function index(){
      $routes = Route::all();
      return view('index')->with('routes',$routes);
    }
}
