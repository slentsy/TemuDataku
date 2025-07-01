<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-[#ECEBFE]">
            {{-- Container Card (ungu muda) --}}
            <div class="w-full sm:max-w-md mt-6 px-6 py-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
                
                {{-- Logo TemuDataku --}}
                <div class="flex justify-center mb-6">
                    <a href="/">
                        <img src="{{ asset('images/temudataku-1.png') }}" alt="TemuDataku Logo" class="h-30 w-auto">
                    </a>
                </div>

                {{-- Slot Form --}}
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
