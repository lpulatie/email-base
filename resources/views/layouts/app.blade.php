<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('metadescription')">

    <title>ZD Austin Project</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body class="font-sans min-h-screen leading-normal text-gray-darkest mt-12 md:mt-16">
<div id="app">
    @include('partials.header')

    @yield('content')

    @include('partials.footer')
</div>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>