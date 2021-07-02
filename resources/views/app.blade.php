<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('title')
        </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>


    <body>
        @yield('content')
    </body>
    <footer>&copy; Copyright {{ date('Y') }} &middot;
        @if (Route::is('home'))
            <a href="about-me">About us</a>
        @endif
    </footer>
</html>
