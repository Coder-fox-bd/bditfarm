<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'BD IT Firm') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    </head>
    <body>
        <a id="button">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#6563ff" d="M17,13.41,12.71,
                9.17a1,1,0,0,0-1.42,0L7.05,13.41a1,1,0,0,0,0,1.42,1,1,0,0,0,1.41,0L12,11.29l3.54,3.54a1,1,0,0,0,
                .7.29,1,1,0,0,0,.71-.29A1,1,0,0,0,17,13.41Z"/></svg>
        </a>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>

    <!-- Scripts -->
    @livewireScripts
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/main.min.js') }}"></script>
</html>