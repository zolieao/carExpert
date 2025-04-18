<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function auth(Request $request){
        $credentials = $request->only('email', 'password');

    	if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            $user = User::find(Auth::id());
                return redirect('/account');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}


