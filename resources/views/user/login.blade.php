@extends('base')

@section('title', ' | Login')

@section('main')
    <article class="form form-login">
        <h3>LOGIN</h3>
        <form action="{{action('Auth\LoginController@postLoginAction')}}" method="post">
            <p>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Please enter your email...">
            </p>
            <p>
                <label for="password">Password :</label>
                <input type="password" id="password" name="password" placeholder="Please enter your password...">
            </p>
            <p>
                <label for="remember">Remember Me</label>
                <input type="checkbox" value="remember" id="remember">
            </p>

            @csrf
            <p>
                <button class="button" type="submit">Login</button>
            </p>
        </form>
    </article>
@endsection