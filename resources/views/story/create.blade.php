@extends('base')

@section('title', ' | Share Story')

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

    <section class="shear-form">
        <h2>Share new story</h2>
        <form class="form" action="{{action('StoryController@postStoryAction')}}" method="post">
            <p>
                <label for="title">Title :</label><br>
                <input type="text" name="title" id="title" placeholder="Title of your story...">
            </p>

            <p>
                <label for="content">Your Story :</label><br>
                <textarea name="story" id="content" cols="50" rows="20"
                          placeholder="Tell Us About Your Story..."></textarea>
            </p>
            <p>
                <a href="/" class="button">Cancel</a>
                @csrf
                <button class="button" type="submit">Share</button>
            </p>
        </form>
    </section>
@endsection