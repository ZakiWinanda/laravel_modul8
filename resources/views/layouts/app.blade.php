<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle ?? 'My Laravel App' }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    @if (!in_array(Route::currentRouteName(), ['login']))
        {{-- Navbar tidak muncul jika di halaman login --}}
        @include('layouts.nav')
    @endif
    @yield('content')
    @vite('resources/js/app.js')
</body>

</html>
