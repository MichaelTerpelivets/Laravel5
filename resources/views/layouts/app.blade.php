<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'advertisement') }}</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>


    <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
    {{--<title></title>--}}
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @include('layouts.nav_bar')
    @yield('content')
    @include('layouts.footer')
</div>

<!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}"></script>--}}
</body>
</html>
