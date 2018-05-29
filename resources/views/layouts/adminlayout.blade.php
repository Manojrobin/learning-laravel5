<?php
/**
 * Created by PhpStorm.
 * User: Manoj
 * Date: 5/29/18
 * Time: 10:45 AM
 */
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Focus Admin: Admin UI</title>

        <!-- ================= Favicon ================== -->
        <!-- Standard -->
        <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
        <!-- Retina iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
        <!-- Retina iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
        <!-- Standard iPad Touch Icon-->
        <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
        <!-- Standard iPhone Touch Icon-->
        <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

        <!-- Styles -->
        <link href="{{ asset('assets/css/lib/weather-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/lib/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/lib/themify-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/lib/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('assets/css/lib/helper.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/lib/style.css') }}" rel="stylesheet">
    </head>

    <body>

        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><a href="index.html"><img src="assets/images/logo.png" alt="" /><span>Focus</span></a></div>
                    <ul>
                        <li class="label">Main</li>
                        <li class="active"><a class="sidebar-sub-toggle"> Dashboard</a>
                        </li>

                        <li class="label">Apps</li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i>  Category  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="#">Add Category</a></li>
                                <li><a href="chart-morris.html">List</a></li>
                            </ul>
                        </li>
                        <li><a><i class="ti-close"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->

        <!-- jquery vendor -->
        <script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/lib/jquery.nanoscroller.min.js') }}"></script>
        <!-- nano scroller -->
        <script src="{{ asset('assets/js/lib/menubar/sidebar.js') }}"></script>
        <script src="{{ asset('assets/js/lib/preloader/pace.min.js') }}"></script>
        <!-- sidebar -->
        <script src="{{ asset('assets/js/lib/bootstrap.min.js') }}"></script>

        <!-- bootstrap -->

        <script src="{{ asset('assets/js/lib/circle-progress/circle-progress.min.js') }}"></script>
        <script src="{{ asset('assets/js/lib/circle-progress/circle-progress-init.js') }}"></script>

        <script src="{{ asset('assets/js/lib/morris-chart/raphael-min.js') }}"></script>
        <script src="{{ asset('assets/js/lib/morris-chart/morris.js') }}"></script>
        <script src="{{ asset('assets/js/lib/morris-chart/morris-init.js') }}"></script>

        <!--  flot-chart js -->
        <script src="{{ asset('assets/js/lib/flot-chart/jquery.flot.js') }}"></script>
        <script src="{{ asset('assets/js/lib/flot-chart/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('assets/js/lib/flot-chart/flot-chart-init.js') }}"></script>
        <!-- // flot-chart js -->


        <script src="{{ asset('assets/js/lib/vector-map/jquery.vmap.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('assets/js/lib/vector-map/jquery.vmap.min.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('assets/js/lib/vector-map/jquery.vmap.sampledata.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('assets/js/lib/vector-map/country/jquery.vmap.world.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('assets/js/lib/vector-map/country/jquery.vmap.algeria.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('assets/js/lib/vector-map/country/jquery.vmap.argentina.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('assets/js/lib/vector-map/country/jquery.vmap.brazil.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('assets/js/lib/vector-map/country/jquery.vmap.france.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('assets/js/lib/vector-map/country/jquery.vmap.germany.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('assets/js/lib/vector-map/country/jquery.vmap.greece.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('assets/js/lib/vector-map/country/jquery.vmap.iran.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('assets/js/lib/vector-map/country/jquery.vmap.iraq.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('assets/js/lib/vector-map/country/jquery.vmap.russia.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('assets/js/lib/vector-map/country/jquery.vmap.tunisia.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('assets/js/lib/vector-map/country/jquery.vmap.europe.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('assets/js/lib/vector-map/country/jquery.vmap.usa.js') }}"></script>
        <!-- scripit init-->
        <script src="{{ asset('assets/js/lib/vector-map/vector.init.js') }}"></script>

        <script src="{{ asset('assets/js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
        <script src="{{ asset('assets/js/lib/weather/weather-init.js') }}"></script>
        <script src="{{ asset('assets/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
        <!-- scripit init-->

    </body>

</html>
