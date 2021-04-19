<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello City</title>
    </head>
    <body>
        <h1>Hello from maroc</h1>
        <p>It's currently {{date('H:i A')}}</p>

        <footer>
            <p>
                &copy; Copiright GlobalTech.SA {{date('Y')}} 
                &middot; <a href="/about-us">ABOUT US</a>
            </p>
        </footer>
    </body>
</html>
