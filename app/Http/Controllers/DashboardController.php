<?php
namespace App\Http\Controllers;

use App\User;
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
      return view('dashboard')->with('user', $user);
    }
}
