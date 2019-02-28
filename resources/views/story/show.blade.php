@extends('base')

@section('title', ' | A Story')

@section('main')
    <section class="story">
        <header>
            <h3>{{$story->title}}</h3>
            <small>Posted on: {{$story->created_at}} | Last update on: {{$story->updated_at}}</small>
        </header>
        <p>{{$story->content}}</p>
        <p>
            <a href="{{route('edit_story', ['id' => $story->id])}}" class="button">Edit Story</a>
            <a href="{{route('all_stories')}}" class="button">All Stories</a>
        </p>
    </section>
@endsection