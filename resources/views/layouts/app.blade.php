<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','e瞳网2018年招新页面')</title>

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
</head>
<body>
<<<<<<< HEAD
    <div id="app" class="{{ route_class() }}">
        @include('shared._message')
=======
    <div id="app" class="{{ route_class() }} container">
>>>>>>> a47f9e8ef7528eea3ff1f9d100c33f8882b506dd
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
