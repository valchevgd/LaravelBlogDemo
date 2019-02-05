@extends('base')

@section('title', ' | Homepage')

@section('main')

    <section class="home-main">
        <h1><span>Welcome</span><br> <span>to</span><br> Our <i class="fas fa-pen-nib"></i> Stories</h1>
        <p>You can <a href="/share_story">share</a> your story with us...</p>
    </section>
    @foreach($stories as $story)
        <article class="home-main">
            <h3>{{$story->title}}</h3>
            <p>{{$story->content}}</p>
            <a href="{{action('StoryController@getStoryAction', ['id' => $story->id])}}">Read more...</a>
        </article>
    @endforeach

@endsection