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

<body class="font-sans text-gray-900 antialiased">
    <div
        class=" bg-gradient-to-r from-[#0E0F62] to-[#1D1FC8] min-h-screen flex justify-center gap-8 sm:justify-center sm:pt-0">

        <div class="flex flex-col w-max gap-52">
            <div>
                <span class="absolute top-10 left-[-10px] w-[40%] rounded-full bg-white h-6"></span>
                <span class="absolute top-20 left-[-10px] w-[30%] rounded-full bg-white h-6"></span>
                <span class="absolute top-[120px] left-[-10px] w-[20%] rounded-full bg-white h-6"></span>
            </div>
            <div>
                <h1 class="text-4xl font-bold uppercase text-white text-center app-title">Thumbworx</h1>
                <x-application-logo />
            </div>
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
