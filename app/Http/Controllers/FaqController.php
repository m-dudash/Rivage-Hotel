<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faq = Faq::all();
        return view('faq', ['faq'=>$faq]);
    }
}
