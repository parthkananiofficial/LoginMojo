<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="scroll-behavior: smooth;">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/png">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Icon -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/LineIcons.2.0.css') }}">

        <!-- Animate -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">

        <!-- Tiny Slider  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/tiny-slider.css') }}">
        <!-- Tailwind css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/tailwind.css') }}">

    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/wow.js') }}" defer></script>
    <script src="{{ asset('js/tiny-slider.js') }}" defer></script>
    <script src="{{ asset('js/contact-form.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
</html>
