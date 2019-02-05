@extends('base')

@section('title', ' | A Story')

@section('main')
    <section class="story">
        <h3>{{$story->title}}</h3>
        <p>{{$story->content}}</p>
        <p><a href="/">Back...</a></p>
    </section>
@endsection