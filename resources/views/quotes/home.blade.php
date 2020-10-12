<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <section id="menu"></section>
    <section id="principal">
        <header id="header">
            <img src="{{ asset('frontend/images/menu-white.svg') }}" alt="">
            <div id="random">
                <img src="{{ asset('frontend/images/random-white.svg') }}" alt="">
                <p>Random</p>
            </div>
        </header>
        <main id="main">
            @include('quotes.quote', [$quote])
        </main>
        <footer id="footer"></footer>
    </section>
</body>

<script src="{{ asset('frontend/js/app.js') }}"></script>

</html>