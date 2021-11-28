<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ url('css/style.css')}}">
    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    @yield('content')

</body>

</html>
