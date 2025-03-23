@extends('layouts.app')

@section('content')
    <br><br><br><br><br><br><br>
    <div class="mpic" id="reservation">
        <h1 style="font-size: 1.2em"><b>REVIEWS </b></h1>
    </div>
    <br><br><br>

    @foreach($reviews as $review)
        <div class="review">
            <p class="thm" style="margin-left: 140px">✩ {{$review->rating}}</p>
            <p style="margin-left: 14px; color: #500505; font-size: 23px">{{$review->user ? $review->user->name : 'Anonymous'}}</p>
            <div style="width: 50%; margin-left: 140px">
                <p>{{$review->content}}</p>
            </div>
            <div>
                <p style="right: 70px; position: absolute; margin-top: 50px">{{$review->review_date}}</p>
            </div>
        </div>
        <br><br><br><br>
    @endforeach


    <br /><br /><br /><br />
    <p class="thm" style="font-size: 200%">
        We welcome any review you may have of your Rivage stay
    </p>
    <br /><br /><br /><br /><br /><br /><br /><br />
@endsection
