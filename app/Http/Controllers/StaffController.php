<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
      $users = User::all();
      return view('staffs.index')->with('users', $users);
    }

    public function create(){
      $roles = Role::all();
      return view('staffs.addStaff')->with('roles', $roles);
    }
}
