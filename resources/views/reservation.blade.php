@extends('layouts.app')
@section('content')
    <br /><br /><br />
    <div class="mpic" id="reservation">
        <h1 style="font-size: 1.2em"><b>RESERVATION </b></h1>
    </div>
    <br />
    <div class="offers">
        <!-- LARGE LUXE -->
        <div class="container" id="main">
            <div class="centered" style="top: 16vw">LARGE LUXE</div>
            <img src="{{asset('images/reservation/img4.png')}}" alt="Amsterdam" />
            <div class="details">
                <form action="{{route('reservation.store')}}" method="post">
                    @csrf
                    <div style="display: flex; flex-direction: column">
                        <label for="name">MENO HLAVNÉHO HOSŤA: </label>
                        <input class="inp" type="text" name="name" id="name" />
                        <label for="cislo">KONTAKTNÉ TELEFÓNNE ČÍSLO:</label>
                        <input class="inp" type="tel" name="mobile" id="cislo" />
                        <label for="mail">E-MAIL:</label>
                        <input class="inp" type="email"  name="email" id="mail" />
                    </div>
                    <div
                        style="display: flex; flex-direction: column; margin-left: 8%"
                    >
                        <label for="from">DÁTUM PRÍCHODU:</label>
                        <input class="inp" type="date"  name="arrival_date" id="from" />
                        <label for="to">DÁTUM ODCHODU:</label>
                        <input class="inp" type="date" name="departure_date" id="to" />
                    </div>
                    <div
                        style="
                  display: flex;
                  flex-direction: column;
                  margin-left: 8%;
                  align-items: center;
                "
                    >
                        <label for="count">POČET HOSTÍ:</label>
                        <select name="guests" id="count">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <label for="pets">PETS:</label>
                        <input class="chek" type="checkbox" name="pets" id="pets" />
                    </div>
                    <div
                        style="
                  display: flex;
                  flex-direction: column;
                  margin-left: 7%;
                  align-items: center;
                "
                    >
                        <label for="karta1">KARTOU</label>
                        <input class="rd" type="radio" id="karta1" name="payment_method" value="card"/>
                        <label for="hot1">V HOTOVOSTI</label>
                        <input class="rd" type="radio" id="hot1" name="payment_method" value="cash" />
                    </div>
                    <button>RESERVE</button>
                </form>
            </div>
        </div>
        <!-- KARPATSKA CHATA -->
        <div class="container">
            <div class="centered" style="top: 16vw">CARPATHIAN HOUSE</div>
            <img src="{{asset('images/reservation/img3.png')}}" alt="Amsterdam" />
            <div class="details">
                <form action="{{route('reservation.store')}}" method="post">
                    @csrf
                    <div style="display: flex; flex-direction: column">
                        <label for="name1">MENO HLAVNÉHO HOSŤA: </label>
                        <input class="inp" type="text" id="name1" name="name" />
                        <label for="cislo1">KONTAKTNÉ TELEFÓNNE ČÍSLO:</label>
                        <input class="inp" type="tel" id="cislo1" name="mobile" />
                        <label for="mail1">E-MAIL:</label>
                        <input class="inp" type="email" id="mail1" name="email" />
                    </div>
                    <div
                        style="display: flex; flex-direction: column; margin-left: 8%"
                    >
                        <label for="from1">DÁTUM PRÍCHODU:</label>
                        <input class="inp" type="date" id="from1" name="arrival_date" />
                        <label for="to1">DÁTUM ODCHODU:</label>
                        <input class="inp" type="date" id="to1"  name="departure_date" />
                    </div>
                    <div
                        style="
                  display: flex;
                  flex-direction: column;
                  margin-left: 8%;
                  align-items: center;
                "
                    >
                        <label for="count1">POČET HOSTÍ:</label>
                        <select name="guests" id="count1">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <label for="pets1">PETS:</label>
                        <input class="chek" type="checkbox" id="pets1" name="pets" />
                    </div>
                    <div
                        style="
                  display: flex;
                  flex-direction: column;
                  margin-left: 7%;
                  align-items: center;
                "
                    >
                        <label for="karta1">KARTOU</label>
                        <input class="rd" type="radio" id="karta1" name="payment_method" value="card" />
                        <label for="hot1">V HOTOVOSTI</label>
                        <input class="rd" type="radio" id="hot1" name="payment_method" value="cash" />
                    </div>
                    <button>RESERVE</button>
                </form>
            </div>
        </div>
        <!-- AMSTERDAM CLASSIC -->
        <div class="container">
            <div class="centered" style="top: 16vw">AMSTERDAM CLASSIC</div>
            <img src="{{asset('images/reservation/img0.png')}}" alt="Amsterdam" />
            <div class="details">
                <form action="{{route('reservation.store')}}" method="post">
                    @csrf
                    <div style="display: flex; flex-direction: column">
                        <label for="name2">MENO HLAVNÉHO HOSŤA: </label>
                        <input class="inp" type="text" id="name2" name="name"/>
                        <label for="cislo2">KONTAKTNÉ TELEFÓNNE ČÍSLO:</label>
                        <input class="inp" type="tel" id="cislo2" name="mobile"/>
                        <label for="mail2">E-MAIL:</label>
                        <input class="inp" type="email" id="mail2" name="email" />
                    </div>
                    <div
                        style="display: flex; flex-direction: column; margin-left: 8%"
                    >
                        <label for="from2">DÁTUM PRÍCHODU:</label>
                        <input class="inp" type="date" id="from2" name="arrival_date"/>
                        <label for="to2">DÁTUM ODCHODU:</label>
                        <input class="inp" type="date" id="to2"  name="departure_date" />
                    </div>
                    <div
                        style="
                  display: flex;
                  flex-direction: column;
                  margin-left: 8%;
                  align-items: center;
                "
                    >
                        <label for="count2">POČET HOSTÍ:</label>
                        <select name="guests" id="count2">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <label for="pets2">PETS:</label>
                        <input class="chek" type="checkbox" id="pets2" name="pets"  />
                    </div>
                    <div
                        style="
                  display: flex;
                  flex-direction: column;
                  margin-left: 7%;
                  align-items: center;
                "
                    >
                        <label for="karta2">KARTOU</label>
                        <input class="rd" type="radio" id="karta2" name="payment_method" value="card" />
                        <label for="hot2">V HOTOVOSTI</label>
                        <input class="rd" type="radio" id="hot2" name="payment_method" value="cash" />
                    </div>
                    <button>RESERVE</button>
                </form>
            </div>
        </div>
        <!-- NEW WEST -->
        <div class="container">
            <div class="centered" style="top: 16vw">NEW WEST</div>
            <img src="{{asset('images/reservation/img2.png')}}" alt="Amsterdam" />
            <div class="details">
                <form action="{{route('reservation.store')}}" method="post">
                    @csrf
                    <div style="display: flex; flex-direction: column">
                        <label for="name3">MENO HLAVNÉHO HOSŤA: </label>
                        <input class="inp" type="text" id="name3" name="name"/>
                        <label for="cislo3">KONTAKTNÉ TELEFÓNNE ČÍSLO:</label>
                        <input class="inp" type="tel" id="cislo3" name="mobile"/>
                        <label for="mail3">E-MAIL:</label>
                        <input class="inp" type="email" id="mail3" name="email"/>
                    </div>
                    <div
                        style="display: flex; flex-direction: column; margin-left: 8%"
                    >
                        <label for="from3">DÁTUM PRÍCHODU:</label>
                        <input class="inp" type="date" id="from3" name="arrival_date"/>
                        <label for="to3">DÁTUM ODCHODU:</label>
                        <input class="inp" type="date" id="to3"  name="departure_date"  />
                    </div>
                    <div
                        style="
                  display: flex;
                  flex-direction: column;
                  margin-left: 8%;
                  align-items: center;
                "
                    >
                        <label for="count3">POČET HOSTÍ:</label>
                        <select name="guests" id="count3">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <label for="pets3">PETS:</label>
                        <input class="chek" type="checkbox" id="pets3" name="pets" />
                    </div>
                    <div
                        style="
                  display: flex;
                  flex-direction: column;
                  margin-left: 7%;
                  align-items: center;
                "
                    >
                        <label for="karta3">KARTOU</label>
                        <input class="rd" type="radio" id="karta3" name="payment_method" value="card"/>
                        <label for="hot3">V HOTOVOSTI</label>
                        <input class="rd" type="radio" id="hot3" name="payment_method" value="cash" />
                    </div>
                    <button>RESERVE</button>
                </form>
            </div>
        </div>
    </div>
    <br /><br /><br /><br /><br /><br /><br /><br />
    <p class="thm" style="font-size: 200%">
        Every room - comfort in Perfection
    </p>
    <br /><br /><br /><br /><br /><br /><br /><br />
@endsection
