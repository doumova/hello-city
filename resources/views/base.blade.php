<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
    </head>
    <body>
        @yield('content')

        <footer>
            <p>
                &copy; Copiright GlobalTech.SA {{date('Y')}} 
                &middot; <a href="{{route('about')}}">ABOUT US</a>
            </p>
        </footer>
    </body>
</html>
