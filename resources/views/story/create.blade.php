@extends('base')

@section('main')
    <section class="shear-form">
        <h2>Share new story</h2>
        <form class="form" action="" method="post">
            <p>
                <label for="title">Title :</label><br>
                <input type="text" name="title" id="title" placeholder="Title of your story...">
            </p>

            <p>
                <label for="story">Your Story :</label><br>
                <textarea name="story" id="story" cols="50" rows="20" placeholder="Tell Us About Your Story..."></textarea>
            </p>
            <p>
                <a href="/" class="button">Cancel</a>
                <button class="button" type="submit">Share</button>
            </p>
        </form>
    </section>
@endsection