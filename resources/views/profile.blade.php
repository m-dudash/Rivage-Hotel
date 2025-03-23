@extends('layouts.app')
@section('content')
    <div style="margin-left: 100px">
        <br><br><br><br><br><br><br><br>
        <h1>Welcome to your profile!</h1>
        <p>Your email: testemail@test.sk</p>
        <br><br><br>
        <!-- Форма для изменения пароля -->
        <form method="post" action="">
            <label for="new_password" style="margin-right: 20px">New Password:</label>
            <input style="margin-right: 20px" type="password" id="new_password" name="new_password" required>
            <button type="submit">Change Password</button>
        </form>
        <br>
        <form method="post" action="">
            <label for="new_name" style="margin-right: 20px">Enter your name:</label>
            <input style="margin-right: 20px" type="text" id="new_name" name="new_name" required>
            <button type="submit">Save</button>
        </form>

            <!-- Форма для кнопки logout -->
        <br><br><br>
        <form method="post">
            <button type="submit" name="logout">Logout</button>
        </form>
        <br><br><br><br><br>
    </div>
@endsection
