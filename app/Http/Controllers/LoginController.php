<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('log-reg.login');
    }

    public function loginpost(Request $request){
        if (Auth::user()->level == 'admin') {
            return redirect('/dashboard');
        
        } elseif (Auth::user()->level == "penjual") {
            return redirect("/tes");
        } else {
            return redirect("/toko");
        }

        return \redirect('login');
    }
    public function register()
    {
        return view('log-reg.register');
    }
    public function registerpost(Request $request)
    {
        $data = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),

        ]);
        return redirect()->route('login');
    }
}
