<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use App\Mail\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
      $user->password = bcrypt('qazplm');
      $user->save();

      if ($request['role'] === '1') {
        $user->roles()->attach($role_admin);
      }elseif ($request['role'] === '2') {
        $user->roles()->attach($role_agent);
      }
      // Mail::to($request->user())->send(new Welcome($user));
      Mail::to($request->email)->send(new Welcome($user));

      return redirect('admin/staffs');
    }
}
