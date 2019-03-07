@extends('base')

@section('title', ' | Reset Password')

@section('main')
    <article class="form form-login">
        <h3>Reset My Password</h3>
        <form action="{{url('password')}}" method="post">

            <input type="hidden" value="{{$token}}">
            <p>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Please enter your email..." value="{{$email}}">
            </p>

            <p>
                <label for="password">New Password :</label>
                <input type="password" id="password" name="password" placeholder="Please enter your password...">
            </p>
            <p>
                <label for="password_confirmation">Confirm New Password :</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Please repeat your password...">
            </p>
            @csrf
            <p>
                <button class="button" type="submit">Reset Password</button>
            </p>
        </form>
    </article>
@endsection