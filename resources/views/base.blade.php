<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Stories @yield('title')</title>
    <link rel="stylesheet" href="{{'../../css/style.css'}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
<header>
    <nav>
        <article>
            <p>Our <i class="fas fa-pen-nib"></i> Stories</p>
        </article>

        <ul>
            <li><a href="/">HOME</a></li>
            <li><a href="/share_story">SHARE</a></li>
            <li><a href="/about">ABOUT</a></li>
        </ul>
    </nav>
</header>
<main>
@yield('main')
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