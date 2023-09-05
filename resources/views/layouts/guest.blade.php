<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Recruitment Portal') }} </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">

    <nav class="brand-header navbar navbar-expand-md py-3 border-bottom position-fixed w-100 bg-white">
        <div class="container-fluid">
            <a class="navbar-brand brand" href="/"> <img src={{ asset('images/avnllogo.jpg') }} /></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#guestMenu"
                aria-controls="guestMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="guestMenu">
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"  href="{{ route('alljobs')}}">Job Openings</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href={{route('jobupdates')}}>Job Updates</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href={{ route('applicationstatus') }}>Application Status</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href={{ route('applicationstatus') }}>How to Apply?</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href={{ route('applicationstatus') }}>Fraud Notice</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <main class="main-container">
        {{ $slot }}
    </main>
   

    <footer class="footer py-3 bg-light ">
        <div class="container py-1">
            <div class="d-flex align-items-center">
              
                    Copyright &copy; {{ date('Y') }}. All rights Reserved - Official Website of Armoured Vehicles Nigam Limited.
              
                
            </div>
        </div>

    </footer>
</body>

</html>
