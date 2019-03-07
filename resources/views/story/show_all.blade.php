@extends('base')

@section('title', ' | All Stories')

@section('main')
    <section class="all-articles">
        @foreach($stories as $story)
            <article class="single-article">
                <header>
                    <h3>{{$story->title}}</h3>
                    <small>Category: {{$story->category->name}}</small>
                    <small>Posted on: {{$story->created_at}}</small>
                </header>
                <p>{{substr($story->content, 0,200).'...'}}</p>
                <a href="{{route('show_story', ['id' => $story->id])}}">Read more...</a>
            </article>
        @endforeach
    </section>

    <section class="paginator">
        {!! $stories->links() !!}
    </section>
@endsection