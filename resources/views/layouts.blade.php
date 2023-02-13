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
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    @vite('resources/scss/app.scss')
    @vite(['resources/js/app.js'])
    <title>Laravel Auth</title>
</head>
<body>
    @include('header')
   @yield('content-section')
   @include('footer')
  
  
</body>
</html>