@extends('layouts.header')

@section('content')

<form method="get" action="/registration">
    <div class="container">
        <h1>Регистрация</h1>

        <label><b>Логин</b></label>
        <input type="text" placeholder="введите login" name="login"><br>

        <label><b>E-mail</b></label>
        <input type="text" placeholder="введите e-mail" name="email_address"><br>

        <label><b>Пароль</b></label>
        <input type="password" placeholder="введите пароль" name="password"><br>

        <button type="submit">Войти</button>
    </div>


    <div>
        <span><a href="#">Уже есть аккаунт?</a></span> | <span><a href="/">Вход</a></span>
    </div>
</form>
@endsection()
