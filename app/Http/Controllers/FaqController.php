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

    public function store(Request $request)
    {
        $data = $request->validate([
            'question'=>'required',
            'answer' =>'required'
        ]);
        $item = Faq::create($data);
        return to_route('faq');
    }

    public function destroy(Faq $item)
    {

        $item->delete();

        return to_route('faq');
    }

    public function update(Request $request, Faq $item)
    {
        $data = $request->validate([
            'question'=>'required',
            'answer' =>'required'
        ]);
        $item->update($data);
        return to_route('faq');
    }

    public function edit(Faq $item)
    {
        return view('faqEdit', ['item'=>$item]);
    }
}
