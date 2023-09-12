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
                        <a class="nav-link {{ request()->routeIs('alljobs') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('alljobs') }}">Job Openings</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('jobupdates') ? 'active' : '' }}"
                            href={{ route('jobupdates') }}>Job Updates</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('applicationstatus') ? 'active' : '' }}"
                            href={{ route('applicationstatus') }}>Application Status</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('applicationstatus') ? 'active' : '' }}"
                            href={{ route('applicationstatus') }}>How to Apply?</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('applicationstatus') ? 'active' : '' }}"
                            href={{ route('applicationstatus') }}>Fraud Notice</a>
                    </li>

                    @if (auth()->guard('applicants')->user())
                        <li class="nav-item">
                            <form id="frm-logout" action="{{ route('candidatelogout') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-link">Log out</button>

                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('candidateLogin') }}">Candidate Login</a>
                        </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
    <main class="main-container">

        @if (isset($header))
            <div class="text-center">
                <h1 class="pt-5 mt-5 mb-5">{{ $header }}</h1>
            </div>
        @endif

        {{ $slot }}
    </main>


    <footer class="footer bg-light position-fixed w-100 ">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    Copyright &copy; {{ date('Y') }}. All rights Reserved - Official Website of Armoured Vehicles
                    Nigam Limited.
                </div>


                <ul class="navbar navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Admin Login</a>
                    </li>

                </ul>



            </div>
        </div>

    </footer>
</body>

</html>
