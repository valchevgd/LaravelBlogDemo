@extends('base')

@section('title', ' | My Profile')

@section('main')
    <section class="profile">
        <section id="profile">
            <h3>Hello, {{Auth::user()->name}}!</h3>
            <form action="{{route('upload_picture')}}" method="post" enctype="multipart/form-data">
                <input type="file" name="pic" accept="image/*">
                <input type="submit">
                @csrf
            </form>
        </section>
        <section class="my-stories">
            <h3>My Stories</h3>
            @foreach($stories as $story)
                <article class="my-story">
                    <header>
                        <p>{{$story->title}}</p>
                    </header>
                    <p>{!!   substr($story->content, 0,86).'...' !!}</p>
                    <div>
                        <a href="{{route('show_story', ['id' => $story->id])}}"><i class="fas fa-bars"> View</i></a>
                        <a href="{{route('edit_story', ['id' => $story->id])}}"><i class="fas fa-edit"> Edit</i></a>
                        <a href="{{route('delete_story', ['id' => $story->id])}}"><i class="fas fa-trash-alt"> Delete</i></a>
                    </div>
                </article>
            @endforeach
        </section>
    </section>
@endsection
