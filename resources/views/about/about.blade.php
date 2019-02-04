@extends('base')

@section('title', ' | About')

@section('main')
    <main>

        <article>
            <h3>WHO WE ARE</h3>
            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and
                demoralized by the charms of pleasure.</p>
        </article>

        <article>
            <h3>WHY WE ARE HERE</h3>
            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and
                demoralized by the charms of pleasure.</p>
        </article>

        <article class="form">
            <h3>CONTACT US</h3>
            <form action="{{action('StoryController@getShearStoryAction')}}" method="post">
                <p>
                    <label for="name">Name :</label>
                    <input type="text" id="name" placeholder="Please enter your name...">
                </p>
                <p>
                    <label for="email">Email :</label>
                    <input type="email" id="email" placeholder="Please enter your email...">
                </p>
                <p>
                    <label for="message">Message :</label><br>
                    <textarea id="message" cols="30" rows="10"
                              placeholder="Please enter your message to us..."></textarea>
                </p>
                @csrf
                <p><button class="button" type="submit">Send</button></p>
            </form>
        </article>
    </main>
@endSection
