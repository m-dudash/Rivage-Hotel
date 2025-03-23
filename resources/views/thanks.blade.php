@extends('layouts.app')
@section('content')
    <br><br><br><br><br><br><br>
    <div style="display: flex; justify-content: center;">

        <img src="{{asset('images/crRD.png')}}" alt="success" style="width: 200px;">


    </div>
    <br>
    <div style="display: flex; justify-content: center;">
        <h2 style="font-size: 30px; color: black;">{{session('msg')}}</h2>
    </div>
    <br><br><br><br><br>
@endsection

