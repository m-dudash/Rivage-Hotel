@extends('layouts.loginLayout')
@section('content')
    <div class="otazky">
        <form action="{{route('login')}}" id="log" method="post">
            @csrf
            <h3>LOGIN</h3>
            <br>
            <div>
                <label for="meno">EMAIL:</label>
                <input class="inp" type="email" id="mail" name="email" required />
                <br /><br />
                <label for="mail">PASSWORD:</label>
                <input class="inp" type="password" id="pass" name="password" required />
                <br /><br /><br />
                <button type="submit">LOGIN</button>
            </div>
        </form>

        <h1 style="color: #500505; font-size: 50px">OR</h1>

        <form action="{{route('register')}}" id="reg" method="post" style="margin-top: 230px;">
            @csrf
            <h3>REGISTER</h3>
            <br>
            <div>
                <label for="meno">EMAIL:</label>
                <input class="inp" type="email" id="mail" name="email" required />
                <br /><br />
                <label for="mail">PASSWORD:</label>
                <input class="inp" type="password" id="pass" name="password" required />
                <br /><br />
                <label for="pass2">REPEAT PASSWORD:</label>
                <input class="inp" type="password" id="pass2" name="password_confirmation" required />
                <br /><br />
                <input type="checkbox" id="agree" name="agree" required />
                <label for="agree">SÚHLASÍМ СО SPRACOVANÍМ OSOBNÝCH ÚDAJOV</label>
                <br /><br /><br />
                <button type="submit">REGISTER</button>
            </div>
        </form>
    </div>
@endsection
