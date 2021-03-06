@extends('base')

@section('title', ' | Share Story')

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
        <h2>Share new story</h2>
        <form class="form" action="{{route('post_story')}}" method="post">
            <p>
                <label for="title">Title :</label>
                <input type="text" name="title" id="title" placeholder="Title of your story...">
            </p>

            <p>
                <label for="category_id">Category :</label>
                <select name="category_id" id="category_id">
                    <option value=""></option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </p>

            <p class="tag">
                <label>Tags :</label>
                @foreach($tags as $tag)
                    <label for="{{$tag->name}}">{{$tag->name}}</label>
                    <input type="checkbox" name="tags[]" id="{{$tag->name}}" value="{{$tag->id}}">
                @endforeach
            </p>

            <p>
                <label for="content">Your Story :</label>
                <textarea name="story" id="content" cols="70" rows="20"
                          placeholder="Tell Us About Your Story..."></textarea>
            </p>
            <p>
                <a href="/" class="button">Cancel</a>
                @csrf
                <button class="button" type="submit">Share Story</button>
            </p>
        </form>
    </section>
@endsection