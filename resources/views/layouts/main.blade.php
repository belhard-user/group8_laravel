<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Главная')</title>
    <!-- Custom styles for this template -->
    @section('header.css')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @show

</head>

<body>

@include('partials.nav')
@if(Request::is('/'))
    <div class="jumbotron">
        <div class="container">
            <h1>Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
        </div>
    </div>
@endif

<div class="container">
    @include('partials.flash')
    @include('partials.error')
    @yield('content')
    <hr>

    <footer>
        <p>&copy; {{ $year }} Company, Inc.</p>
    </footer>
</div>

<script src="{{ asset('js/app.js') }}"></script>
@yield('script')
</body>
</html>
