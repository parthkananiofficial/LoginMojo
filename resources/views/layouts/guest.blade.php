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
    <!-- Countrypicker CSS&JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/css/intlTelInput.css" />
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@17.0.3/build/js/intlTelInput.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
</body>
<script>
    function login_with_whatsapp() {
                    var myWindow = window.open("{{ route('whatsender.store') }}", "_blank");
                    myWindow.focus();
                    setTimeout(function() {
                        window.location.replace("{{ route('whatsender.show') }}");
                        }, 2000);
            }
</script>

</html>
