<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>APP HORARIOS</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="flex-center position-ref full-height">
    {{--@if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}" class="col-lg-12">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="col-lg-12">Register</a>
                @endif
            @endauth
        </div>
    @endif--}}
    <div id ="app">
    </div>
</div>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>