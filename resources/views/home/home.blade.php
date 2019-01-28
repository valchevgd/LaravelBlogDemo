<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Stories</title>
    <link rel="stylesheet" href="{{'../../css/style.css'}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
<header>
    <nav>
        <article>
            <p>OUR <i class="fas fa-book-open"></i> STORIES</p>
        </article>

        <ul>
            <li><a href="{{'/'}}">HOME</a></li>
            <li><a href="{{'about'}}">ABOUT</a></li>
        </ul>
    </nav>
</header>
<main>
    <article>
        <h3>{{$articles['first']['title']}}</h3>
        <p>{{$articles['first']['content']}}</p>
        <a href="#">Read more...</a>
    </article>
    <article>
        <h3>{{$articles['second']['title']}}</h3>
        <p>{{$articles['second']['content']}}</p>
        <a href="#">Read more...</a>
    </article>
    <article>
        <h3>{{$articles['third']['title']}}</h3>
        <p>{{$articles['third']['content']}}</p>
        <a href="#">Read more...</a>
    </article>
    <article>
        <h3>{{$articles['fourth']['title']}}</h3>
        <p>{{$articles['fourth']['content']}}</p>
        <a href="#">Read more...</a>
    </article>
</main>
<footer>
    <article>
        &copy; Copyright valchevgd.
    </article>

    <article>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="far fa-envelope"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-pinterest-p"></i></a>
    </article>
</footer>
</body>
</html>