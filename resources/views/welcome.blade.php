<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <link href="{{ asset('tools/style.css') }}" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!--script -->
    <script type="text/javascript" src="{{ asset('tools/jquery.min.js') }}"></script>
    <script type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
                <a href="{{ url('/page') }}">Page</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="wrapper">
            <div class="left-section"><img src="images/watch.png"/></div>
            <div class="right-section">
                <h1 id="logo">Laravel</h1>
                <div class="seprator"></div>
                <div class="main-content">
                    <h2>Our Website is coming soon</h2>
                    <p>In the mean time connect with us with the information provided</p>
                </div>
                <ul class="social">
                    <li id="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li id="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li id="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <ul class="info">
                    <li><i class="fa fa-phone-square"></i>9896483907</li>
                    <li><i class="fa fa-map-marker"></i>301 Clematis. Suite 3000, West Palm Beach, FL 33401</li>
                    <li><i class="fa fa-envelope"></i><a href="#">info@Laravel.com</a></li>
                </ul>

                <div class="social-links">
                    <ul class="social2">
                        <li id="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li id="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li id="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>


            </div>
            <div class="watch-section"><img src="images/watch.png"/></div>
        </div>

    </div>
</div>


</body>
</html>
