<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('reviews', ['reviews'=>$reviews]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'rating'=>'required',
            'content'=>'required'
        ]);
        $data['user_id'] = 1;  //hardcoded
        $data['review_date'] = now()->toDateString();

        Review::create($data);
        return to_route('thanks')->with('msg', 'Thank you for your review');
    }
}
