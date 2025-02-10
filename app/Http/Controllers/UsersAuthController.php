<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UsersAuthController
{
    public function showLoginForm()
    {
        if (Auth::guard('users')->check()) {
            return redirect()->intended('/users');
        }
        return view('users.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => '*username tidak boleh kosong',
            'password.required' => '*Password tidak boleh kosong',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $credentials = $request->only('username', 'password');

        $users = Users::where('username', $credentials['username'])->first();
        if ($users) {
            if (Auth::guard('users')->attempt(array('username' => $credentials['username'], 'password' => $credentials['password']))) {
                $request->session()->regenerate();
                return redirect()->intended('/users');
            }
            return redirect()->back()->withErrors(['error' => "Password salah !"])->withInput($request->only('username'));
        }
        return redirect()->back()->withErrors(['error' => "username tidak terdaftar !"])->withInput($request->only('username'));
    }

    public function register()
    {
        if (Auth::guard('users')->check()) {
            return redirect()->intended('/users');
        }
        return view('users.register');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users|min:3',
            'password' => 'required|min:8'
        ]);
        $users = Users::where('username', $credentials['username'])->first();
        if ($users) {
            return redirect()->back()->withErrors(['error' => "username sudah terdaftar !"])->withInput($request->only('username'));
        } else {
            Users::create($validateData);    
        }
        
        // $request->session()->flash('success','Registration Successfull! You can Log In Now...');

        return redirect('/users/login')->with('success','Registration Successfull! You can Log In Now...');
    }

    public function logout()
    {
        Auth::guard('users')->logout();
        return redirect('/users/login');
    }
}
