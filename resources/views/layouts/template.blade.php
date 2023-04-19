<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Roboto+Condensed:wght@300&family=Roboto:ital,wght@0,100;0,300;1,100&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleMain.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleLogin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleMenu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleDashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleCustomer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleButtons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/authorizationStyle.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleUsers.css') }}">

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
