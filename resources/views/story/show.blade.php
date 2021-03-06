@extends('base')

@section('title', ' | A Story')

@section('main')
    <section class="story">
        <header>
            <h3>{{$story->title}}</h3>
            <p>Posted by: {!! $story->author['name'] !!}</p>
            <p>Category: {{$story->category->name}}</p>
            <p>
                @foreach($tags as $tag)
                    <small>{{$tag['name']}}|</small>
                @endforeach
            </p>
            <small>Posted on: {{$story->created_at}} | Last update on: {{$story->updated_at}}</small>
        </header>
        <p>{!! $story->content !!}</p>

        <a href="{{route('all_stories')}}" class="button">All Stories</a>


        <h4>Comments:</h4>
        @foreach($story->comments as $comment)
            <section class="comment">
                <p>From: {{$comment->author_name}} <br>
                    <small>Added on: {{ $comment->created_at }}</small>
                </p>
                <p>{{$comment->content}}</p>
            </section>
        @endforeach


        <form class="form comment-form" action="{{route('add_comment', ['id' => $story->id])}}" method="post">
            <label for="comment">Add a Comment:</label>
            <textarea name="comment" id="comment" cols="50" rows="5" placeholder="Add your Comment here..."></textarea>
            <button class="button">Add Comment</button>
            @csrf
        </form>


    </section>
@endsection