@extends('base')

@section('title', ' | Reset Password')

@section('main')
    <article class="form form-login">
        <h3>Reset My Password</h3>
        <form action="{{url('password/email')}}" method="post">
            <p>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Please enter your email...">
            </p>
            @csrf
            <p>
                <button class="button" type="submit">Send Email</button>
            </p>
        </form>
    </article>
@endsection
