<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=> 'required',
            'email' => 'required',
            'mobile' => 'required'
        ]);
        Question::create($data);
        return to_route('thanks')->with('msg','Thank you for your question. Our office will contact you as soon as possible.');
    }
}
