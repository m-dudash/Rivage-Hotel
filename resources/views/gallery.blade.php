@extends('layouts.app')

@section('content')
    <!-- BANNER -->
    <br /><br /><br />
    <div class="mpic" id="gallery">
        <h1 style="font-size: 1.2em"><b>GALLERY</b></h1>
    </div>
    <br /><br />
    <!-- PHOTOS -->
    <div class="photos">
        <img src="{{asset('images/gallery/img0.png')}}" alt="hall" />
        <img src="{{asset('images/gallery/img1.png')}}" alt="hall" />
        <img src="{{asset('images/gallery/img2.png')}}" alt="hall" />
        <img src="{{asset('images/gallery/img3.png')}}" alt="hall" />
        <img src="{{asset('images/gallery/img3.png')}}" alt="hall" />
        <img src="{{asset('images/gallery/img5.png')}}" alt="hall" />
    </div>
    <br /><br /><br /><br /><br /><br /><br /><br />
    <p class="thm" style="font-size: 200%">
        Let's plan your journey together
    </p>
    <br /><br /><br /><br /><br /><br /><br /><br />
    </main>
@endsection
