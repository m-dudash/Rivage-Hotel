<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }
    public function updatePassword(Request $request)
    {
        $data = $request->validate([
            'password'=>'required'
        ]);
        $user = auth()->user();
        $data['password'] = bcrypt($data['password']);
        $user->update($data);
        return to_route('home');
    }

    public function updateName(Request $request)
    {
        $data = $request->validate([
            'name'=>'required'
        ]);
        $user = auth()->user();
        $user->update($data);
        return to_route('home');
    }
}
