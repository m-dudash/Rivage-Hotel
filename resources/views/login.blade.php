@extends('layouts.loginLayout')
@section('content')
    <div class="otazky">
        <form action="login.php" id="otazky" method="post">
            <h3>LOGIN</h3>
            <br>
            <div>
                <label for="meno">EMAIL:</label>
                <input class="inp" type="email" id="mail" name="mail" required />
                <br /><br />
                <label for="mail">PASSWORD:</label>
                <input class="inp" type="password" id="pass" name="password" required />
                <br /><br /><br />
                <button type="submit">LOGIN</button>
            </div>
        </form>

        <h1 style="color: #500505; font-size: 50px">OR</h1>

        <form action="register.php" id="otazky" method="post" style="margin-top: 230px;">
            <h3>REGISTER</h3>
            <br>
            <div>
                <label for="meno">EMAIL:</label>
                <input class="inp" type="email" id="mail" name="mail" required />
                <br /><br />
                <label for="mail">PASSWORD:</label>
                <input class="inp" type="password" id="pass" name="pass" required />
                <br /><br />
                <label for="pass2">REPEAT PASSWORD:</label>
                <input class="inp" type="password" id="pass2" name="pass2" required />
                <br /><br />
                <input type="checkbox" id="agree" required />
                <label for="agree">SÚHLASÍМ СО SPRACOVANÍМ OSOBNÝCH ÚDAJOV</label>
                <br /><br /><br />
                <button type="submit">REGISTER</button>
            </div>
        </form>
    </div>
@endsection
