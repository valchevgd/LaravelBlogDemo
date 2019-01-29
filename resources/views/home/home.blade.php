@extends('base')

@section('title', ' | Homepage')

@section('main')
<main>
    <section>
        <h1><span>Welcome</span><br> <span>to</span><br> Our <i class="fas fa-pen-nib"></i> Stories</h1>
        <p>You can <a href="#">share</a> your story with us...</p>
    </section>
    @foreach($articles as $article)
        <article>
            <h2>{{$article['title']}}</h2>
            <p>{{$article['content']}}</p>
            <a href="#">Read more...</a>
        </article>
    @endforeach
</main>
@endsection