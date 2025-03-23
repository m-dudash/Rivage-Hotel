<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
           'name'=>'required',
           'mobile'=>'required',
           'email'=>'required',
           'arrival_date'=>'required',
           'departure_date' =>'required',
           'guests'=>'required',
           'payment_method'=>'required'
        ]);

        Reservation::create($data);
        return to_route('thanks')->with('msg', 'Your room has been successfully booked');
    }
}
