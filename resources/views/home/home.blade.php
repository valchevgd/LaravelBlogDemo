@extends('base')

@section('title', ' | Homepage')

@section('main')

    <section class="home-main">
        <h1><span>Welcome</span><br> <span>to</span><br> Our <i class="fas fa-pen-nib"></i> Stories</h1>
        <p>You can <a href="{{route('share_story')}}">share</a> your story with us...</p>
    </section>
    <section class="home-articles">
        @foreach($stories as $story)
            <article class="home-article">
                <header>
                    <h3>{{$story->title}}</h3>
                    <small>Category: {{$story->category->name}}</small>
                    <small>Posted on: {{$story->created_at}}</small>
                </header>
                <div class="home-paragraph">
                    <p>{{substr($story->content, 0,250).'...'}}</p>
                </div>
                <a href="{{route('show_story', ['id' => $story->id])}}">Read more...</a>
            </article>
        @endforeach
    </section>

@endsection