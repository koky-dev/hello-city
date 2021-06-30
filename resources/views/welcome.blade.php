<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello City</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>Hello From Sénégal</h1>

        <p>Il est actuellement {{ date('H:i') }} </p>

        <footer>&copy; Copyright {{ date('Y') }} &middot; <a href="about-me">About us</a></footer>
    </body>
</html>
