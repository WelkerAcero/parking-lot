<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleMain.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleLogin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleMenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleDashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleCustomer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleButtons.css') }}">

    {{-- Jquery library --}}
    <script src="{{ asset('js/jquery-3.6.1.min.js') }}"></script>
    {{-- Here all Js files --}}
    <script src="{{ asset('js/buttons.js') }}"></script>
</head>

<body class="background-all">
    @yield('header')

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
