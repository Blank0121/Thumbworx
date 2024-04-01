<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Registration</title>
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
    @vite('resources/css/app.css')
    <script defer src="//unpkg.com/alpinejs"></script>
</head>

<body class="pb-12 bg-gradient-to-r from-[#0E0F62] to-[#1D1FC8]">
    <div class="min-h-screen flex items-center justify-center gap-8 sm:pt-0">
        <div class="max-w-md">
            <h1 class="text-4xl font-bold uppercase text-white text-center app-title">Thumbworx</h1>
            <x-application-logo />
        </div>
        <div class="flex flex-col gap-2 self-center">
            <div class="flex flex-col items-center">
                <x-registration-male />
                <h2 class="font-medium uppercase text-2xl text-white">Registration Form</h2>
            </div>
            {{ $slot }}
        </div>
    </div>
</body>

</html>
