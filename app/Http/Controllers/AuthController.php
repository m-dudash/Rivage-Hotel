<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth')->with('auth', "VIEWED");
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return to_route('home')->with('auth', "LOGINED");
        }

        return back()->with('auth', "UNSSUCCES LOGIN");
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return to_route('home')->with('auth', 'LOGOUTED');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        Auth::login($user);
        $request->session()->regenerate();

        // Отладка
        if (Auth::check()) {
            return redirect()->route('home')->with('auth', 'REGISTATED');
        } else {
            return redirect('home')->with('auth', 'LOGIN FAILED AFTER REGISTER');
        }
    }
}
