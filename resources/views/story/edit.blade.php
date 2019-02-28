@extends('base')

@section('title', ' | Edit Story')

@section('main')

    @if(count($errors) > 0)
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="shear-form">
        <h2>Edit your story</h2>
        <form class="form" action="{{route('edit_story', ['id' => $story->id])}}" method="post">
            <p>
                <label for="title">Title :</label><br>
                <input type="text" name="title" id="title" value="{{$story->title}}">
            </p>

            <p>
                <label for="content">Your Story :</label><br>
                <textarea name="story" id="content" cols="50" rows="20"
                          placeholder="Tell Us About Your Story...">{{$story->content}}</textarea>
            </p>
            <p>
                <a href="{{route('show_story', ['id' => $story->id])}}" class="button">Cancel</a>
                @csrf
                <button class="button" type="submit">Edit Story</button>
            </p>
        </form>
    </section>
@endsection