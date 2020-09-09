<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Scripts for date picker -->
    <script src="{{asset('js/bootstrap-datepicker.min.js')}}" defer> </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Styles for datepicker -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    @include('layouts.styles')
    @stack('styles')

</head>
<body>
<div id="wrapper" class="toggled">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        @include('layouts.menu-sidenav')
    </div>
    <!-- /#sidebar-wrapper -->

    @include('layouts.header')

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="py-4">
            @yield('content')
        </div>
    </div>
</div>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>
</html>
