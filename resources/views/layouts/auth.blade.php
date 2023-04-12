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
    <body>
        <div class="font-sans text-gray-900 antialiased ">
            <div class="min-h-screen flex">
                <div class="w-3/5 text-center text-6xl font-extrabold bg-[#fff9f4] hidden lg:block ">
                    @if (isset($textleft))
                        {{ $textleft }}
                    @endif
                    <img src="https://app.agorapulse.com/assets/img/connect/Hero_animation_login_open.png" alt="" class="w-full">
                </div>
                <div class=" mx-auto my-auto">
                    @if (isset($logo))
                        {{ $logo }}
                    @endif
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
