<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dashboard Administrador">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>
        @yield('title')
    </title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-theme.css')}}" rel="stylesheet">
    <link href="{{asset('css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="{{asset('assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" type="text/css">
    <link href="{{asset('css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{asset('css/fullcalendar.css')}}">
    <link href="{{asset('css/widgets.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />
    <link href="{{asset('css/xcharts.min.css')}}" rel=" stylesheet">
    <link href="{{asset('css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">

</head>
<body>
        <section id="container" class="">
{{--        @if (Auth::user()->hasAnyRole('admin'))--}}
            @include('layouts.header')
            @include('layouts.sidebar')
            @yield('content')
{{--        @else--}}
{{--            @yield('content')--}}
{{--        @endif--}}
        </section>

        <!-- javascripts -->
        <script src="{{asset('js/jquery.js')}}"></script>
        <script src="{{asset('js/jquery-ui-1.10.4.min.js')}}"></script>
        <script src="{{asset('js/jquery-1.8.3.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery-ui-1.9.2.custom.min.js')}}"></script>
        {{-- <script src="{{asset('js/bootstrap.min.js')}}"></script> --}}
        <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/jquery-knob/js/jquery.knob.js')}}"></script>
        <script src="{{asset('js/jquery.sparkline.js')}}" type="text/javascript"></script>
        <script src="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
        <script src="{{asset('js/owl.carousel.js')}}"></script>
        <script src="{{asset('js/fullcalendar.min.js')}}"></script>
        <script src="{{asset('assets/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
        <script src="{{asset('js/calendar-custom.js')}}"></script>
        <script src="{{asset('js/jquery.rateit.min.js')}}"></script>
        <script src="{{asset('js/jquery.customSelect.min.js')}}"></script>
        <script src="{{asset('assets/chart-master/Chart.js')}}"></script>
        <script src="{{asset('js/scripts.js')}}"></script>
        <script src="{{asset('js/sparkline-chart.js')}}"></script>
        <script src="{{asset('js/easy-pie-chart.js')}}"></script>
        <script src="{{asset('js/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{asset('js/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{asset('js/xcharts.min.js')}}"></script>
        <script src="{{asset('js/jquery.autosize.min.js')}}"></script>
        <script src="{{asset('js/jquery.placeholder.min.js')}}"></script>
        <script src="{{asset('js/gdp-data.js')}}"></script>
        <script src="{{asset('js/morris.min.js')}}"></script>
        <script src="{{asset('js/sparklines.js')}}"></script>
        <script src="{{asset('js/charts.js')}}"></script>
        <script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>
        {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> --}}
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">



        @yield('scripts')

</body>
</html>