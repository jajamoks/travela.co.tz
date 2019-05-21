<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PasswordController extends Controller
{
    public function index()
    {
        return view('auth.changePassword');
    }

    public function update(Request $request)
    {
        $user = User::find($request->user()->id);
        if ($request['password'] === $request['comfirmPassword']) {
                $user->password = Hash::make($request['password']);
                $user->save();
                Auth::logout();
                return redirect('/login');
        }
        
    }
}
