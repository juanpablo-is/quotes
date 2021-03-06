<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes @yield('title', '')</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/styles.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="icon" type="image/png" href="https://img.icons8.com/cute-clipart/80/quote.png">
</head>

<body>

    <section id="menu">
        <a href="{{ route('quote.index') }}">
            <h1>Quotes</h1>
        </a>
        <hr>
        <ul>
            @foreach($genres->genres as $genre)
            <a href="{{ route('quote.genre', $genre) }}">
                <li> {{ $genre }} </li>
            </a>
            @endforeach
        </ul>
    </section>
    <section id="principal">
        <header id="header">
            <img id="btnMenu" src="{{ asset('frontend/images/menu-white.svg') }}" alt="">
            @yield('random')
        </header>
        <main id="main">
            @yield('content')
        </main>
    </section>
    <script src="{{ asset('frontend/js/app.js') }}"></script>
</body>

</html>