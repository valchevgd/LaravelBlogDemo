@extends('base')

@section('title', ' | A Story')

@section('main')
    <section class="story">
        <header>
            <h3>{{$story->title}}</h3>
            <small>Posted on: {{$story->created_at}} | Last update on: {{$story->updated_at}}</small>
        </header>
        <p>{{$story->content}}</p>
        <p><a href="{{route('all_stories')}}">All Stories</a></p>
    </section>
@endsection