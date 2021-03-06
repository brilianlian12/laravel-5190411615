<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\user;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function simpanuser(Request $request)
    {
        $user = User::create([
            'user' => $request -> nama,
            'email' => $request -> email,
            'password' => bcrypt($request -> password)
        ]);

        return redirect('/register');
    }
}
