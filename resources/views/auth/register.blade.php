@extends('base')

@section('title', ' | Register')

@section('main')
    @if(count($errors) > 0)
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <article class="form form-register">
        <h3>REGISTER FORM</h3>
        <form action="{{action('Auth\RegisterController@postRegisterAction')}}" method="post">
            <p>
                <label for="email">Name :</label>
                <input type="text" id="name" name="name" placeholder="Please enter your name...">
            </p>
            <p>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Please enter your email...">
            </p>
            <p>
                <label for="password">Password :</label>
                <input type="password" id="password" name="password" placeholder="Please enter your password...">
            </p>
            <p>
                <label for="password_confirmation">Confirm Password :</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Please repeat your password...">
            </p>

            @csrf
            <p>
                <button class="button" type="submit">Register</button>
            </p>
        </form>
    </article>
@endsection