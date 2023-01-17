<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;1,400&family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        
        <div class="container">
            @include('includes.top-menus')
            <div class="content">
                @yield('content')
            </div>
        </div>
        @yield('bottom-menu')
    </body>
</html>