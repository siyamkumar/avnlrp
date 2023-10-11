<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">

    @include('layouts.navigation')



    <!-- Page Content -->
    <main class="app-wrapper container-fluid">
        <!-- Page Heading -->
        @if (isset($header))
            <header class="">
                <div class="">
                    {{ $header }}
                </div>
            </header>
        @endif

        {{ $slot }}
    </main>

    @if (session('message'))
        <x-toast :message="session('message')" :status="session('status')" />
    @endif


    <footer class="footer py-3 bg-light ">
        <div class="container py-1">
            <div class="d-flex align-items-center">

                Copyright &copy; {{ date('Y') }}. All rights Reserved - Official Website of Armoured Vehicles Nigam
                Limited.


            </div>
        </div>

    </footer>

    <x-toast-alert />
</body>

</html>
