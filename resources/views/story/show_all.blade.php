@extends('base')

@section('title', ' | All Stories')

@section('main')
    @foreach($stories as $story)
        <article class="single-article">
            <header>
                <h3>{{$story->title}}</h3>
                <small>Posted on: {{$story->created_at}}</small>
            </header>
            <p>{{substr($story->content, 0,400).'...'}}</p>
            <a href="{{route('show_story', ['id' => $story->id])}}">Read more...</a>
        </article>
    @endforeach
@endsection