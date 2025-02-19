<!DOCTYPE html>
<html>
<head>
    <meta">
    
    <title>@yield('title', 'Aprendible')</title>
    <style>
        .active a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    @include('partials.nav')
    @yield('content')
</body>
</html>