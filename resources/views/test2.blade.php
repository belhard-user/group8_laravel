<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('home.about') }}">About</a></li>
        </ul>
    </nav>
    <h1>@yield('page_title') Новогодни</h1>
    <div class="container">
        @yield('content')
        <hr>
        @yield('content2')
    </div>
</body>
</html>