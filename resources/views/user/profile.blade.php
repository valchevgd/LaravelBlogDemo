@extends('base')

@section('title', ' | Share Story')

@section('main')
    <section>
        <h3>My Stories</h3>
        @foreach($stories as $story)
            <article class="my-story">
                <header>
                    <p>{{$story->title}}</p>
                </header>
                <p>{!!   substr($story->content, 0,100).'...' !!}</p>
                <a href="{{route('edit_story', ['id' => $story->id])}}"><i class="fas fa-edit">Edit</i></a>
                <a href="{{route('delete_story', ['id' => $story->id])}}"><i class="fas fa-trash-alt">Delete</i></a>
            </article>


        @endforeach
    </section>
@endsection
