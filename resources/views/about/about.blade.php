@extends('base')

@section('title', ' | About')

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

    <section class="about">
        <article class="about-article">
            <h3>WHO WE ARE</h3>
            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and
                demoralized by the charms of pleasure.</p>
        </article>

        <article class="about-article">
            <h3>WHY WE ARE HERE</h3>
            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and
                demoralized by the charms of pleasure.</p>
        </article>

        <article class="form about-article">
            <h3>CONTACT US</h3>
            <form action="{{route('send_email')}}" method="post">
                <p>
                    <label for="name">Name :</label>
                    <input type="text" id="name" name="name" placeholder="Please enter your name...">
                </p>
                <p>
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" placeholder="Please enter your email...">
                </p>
                <p>
                    <label for="message">Message :</label><br>
                    <textarea id="message" cols="30" rows="10"
                              name="messageContent"
                              placeholder="Please enter your message to us..."></textarea>
                </p>
                @csrf
                <p>
                    <button class="button" type="submit">Send</button>
                </p>
            </form>
        </article>
    </section>
@endSection
