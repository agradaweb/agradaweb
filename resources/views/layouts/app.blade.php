<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ $theme }}">
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
        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased bg-body-color">
        <div class="flex">
            <div class="hidden xl:block w-[220px] flex-none">
              @include('backend.partials.sidebar')
            </div>
            <div class="flex-grow">

              <div class="flex flex-col min-h-screen">
                <header class="bg-white p-5">
                  @include('backend.partials.header')
                </header>
                <div class="flex-grow xl:container xl:mx-auto sm:px-5">
                  @if (isset($header))
                    <h2 class="font-bold lg:text-2xl text-xl capitalize text-slate-900 my-5">
                      {{ $header }}
                    </h2>
                  @endif
                  {{ $slot }}
                </div>
                <footer class="bg-white py-3 px-5 text-sm font-normal text-gray-400 mt-20">
                  @include('backend.partials.footer')
                </footer>
              </div>
            </div>
        </div>
        <x-banner />
        @stack('modals')

        @livewireScripts
    </body>
</html>
