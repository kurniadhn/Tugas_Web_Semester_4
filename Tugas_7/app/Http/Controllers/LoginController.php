<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        $loginType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $login = [
            $loginType => $request->username,
            'password' => $request->password
        ];

        if(auth()->attempt($login)){
            return redirect()->route('home');
        }
        return redirect()->route('login')->with(['error' => 'Email/Password Salah!']);
    }
}
