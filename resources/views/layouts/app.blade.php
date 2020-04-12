<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hexlet Blog - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        <style>
            .menu_ul{
                list-style: none;
                padding-left:0;
            }
            .menu_ul li{
                display: inline-block;
            }
        </style>
    </head>
    <body>
        <div class="container mt-4">
            <div class="menu">
                <ul class="menu_ul">
                    <li><a href="/article">Article</a></li>
                    <li><a href="/articles/create">Add new</a></li>
					<li><a href="/articles/2">Article 2</a></li> 
                    <li><a href="/rating">Rating</a></li>
                    <li><a href="/about">About</a></li>
                </ul>
            </div>
            <h1>@yield('header')</h1>
            <div>
                @yield('content')
            </div>
        </div>
    </body>
</html>