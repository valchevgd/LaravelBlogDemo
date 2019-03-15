@extends('base')

@section('title', ' | Delete Story')

@section('main')
    <section class="story">
        <header>
            <h3>{{$story->title}}</h3>
            <p>Posted by: {!! $story->author['name'] !!}</p>
            <p>Category: {{$story->category->name}}</p>
            <p>
                @foreach($story->tags as $tag)
                    <small>{{$tag['name']}}|</small>
                @endforeach
            </p>
            <small>Posted on: {{$story->created_at}} | Last update on: {{$story->updated_at}}</small>
        </header>
        <p>{!! $story->content !!}</p>

        <form action="{{route('delete_story', ['id' => $story->id])}}" method="post">
            <button type="submit" class="button">Delete Stories</button>
            @csrf
        </form>

        <h4>Comments:</h4>
        @foreach($story->comments as $comment)
            <section class="comment">
                <p>From: {{$comment->author_name}} <br>
                    <small>Added on: {{ $comment->created_at }}</small>
                </p>
                <p>{{$comment->content}}</p>
            </section>
        @endforeach
    </section>
@endsection