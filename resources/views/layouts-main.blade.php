<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    @vite('resources/scss/app.scss')
    <title>Laravel Auth</title>
</head>
<body>
    @include('header')
   @yield('form')
   @include('footer')
   <script src="../js/app.js"></script>
</body>
</html>