<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/image/favicon/favicon-32x32.png') }}">

    <!-- Google Font-->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,400italic,500,500italic,700,900,900italic,700italic%7COswald:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Design Style -->

    @yield('styles')
</head>
<body>
<div id="container" class="container">
    @include('layouts.frontend._leftmenu')
    @yield('content')
</div>

@yield('scripts')

</body>
</html>
