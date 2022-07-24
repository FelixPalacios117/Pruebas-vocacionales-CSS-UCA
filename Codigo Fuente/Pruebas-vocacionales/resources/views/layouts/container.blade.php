<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet"> 
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> 
        
    </head>
    <body>
        @yield('navbar')
        @include('layouts.navbar')
         
    </body>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-3.6.0.min.js') }}"></script> 
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script> 
</html>
