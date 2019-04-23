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

    public function store(Request $request){
      $role_admin = Role::where('name', 'Admin')->first();
      $role_agent = Role::where('name', 'Agent')->first();

      $user = new User();
      $user->name = $request['name'];
      $user->city = $request['city'];
      $user->email = $request['email'];
      $user->number = $request['number'];
      $user->password = bcrypt('qazwsx');
      $user->save();

      if ($request['role'] === '1') {
        $user->roles()->attach($role_admin);
      }elseif ($request['role'] === '2') {
        $user->roles()->attach($role_agent);
      }

      return redirect('admin/staffs');
    }
}
