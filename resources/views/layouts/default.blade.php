<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('includes.head')
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
        @include('includes.header')
        @yield('content')
        @include('includes.footer')
        @stack('page-script')
    </body>
</html>
        