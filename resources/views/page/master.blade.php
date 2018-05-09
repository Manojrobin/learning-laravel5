<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">DEMO LARAVEL</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/') }}">HOME</a></li>
<<<<<<< HEAD
                 <li><a href="{{ route('page.index') }}">PAGE</a></li>
=======
>>>>>>> b5d0bc84179ab179571619a1004fe9e0a6d3a845
                <li><a href="{{ route('page.create') }}">CREATE POST</a></li>
                <li><a href="#">CONTACT INFO</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>
</html>
