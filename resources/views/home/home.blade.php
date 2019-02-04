@extends('base')

@section('title', ' | Homepage')

@section('main')
<main>
    <section>
        <h1><span>Welcome</span><br> <span>to</span><br> Our <i class="fas fa-pen-nib"></i> Stories</h1>
        <p>You can <a href="/share_story">share</a> your story with us...</p>
    </section>
    @foreach($articles as $article)
        <article>
            <h3>{{$article['title']}}</h3>
            <p>{{$article['content']}}</p>
            <a href="#">Read more...</a>
        </article>
    @endforeach
</main>
@endsection