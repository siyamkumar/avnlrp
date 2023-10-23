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
                        <a class="nav-link {{ request()->routeIs('jobs.*') ? 'active' : '' }}" aria-current="page"
                            href="{{ route('jobs.index') }}">Job Openings</a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('jobupdates') ? 'active' : '' }}"
                            href={{ route('jobupdates') }}>Job Updates</a>
                    </li> --}}

                    {{-- <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('applicationstatus') ? 'active' : '' }}"
                            href={{ route('applicationstatus') }}>Application Status</a>
                    </li> --}}

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('howtoapply') ? 'active' : '' }}"
                            href="{{ route('howtoapply') }}">How to Apply?</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('fraudnotice') ? 'active' : '' }}"
                            href="{{ route('fraudnotice')}}">Fraud Notice</a>
                    </li>

                    @if (auth()->guard('applicants')->user())
                        <li class="nav-item dropdown">
                            <a href="#" id="profileDropdown"
                                class="d-block link-body-emphasis text-decoration-none dropdown-toggle show"
                                data-bs-toggle="dropdown" aria-expanded="true">
                                <div
                                    class="rounded-circle profile-container d-flex align-items-center justify-content-center fw-bold text-white">
                                    {{ auth()->guard('applicants')->user()->fullname[0] }}
                                </div>

                            </a>
                            <ul class="dropdown-menu text-small"
                                style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 34px);"
                                data-popper-placement="bottom-start">
                                <li><a class="dropdown-item" href="{{ route('candidateprofile') }}">My Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <div class="" href="#">

                                        <form id="frm-logout" action="{{ route('candidatelogout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item">Log out</button>

                                        </form>
                                    </div>
                                </li>
                            </ul>
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
    <main class="main-container pb-3">

        @if (isset($header))
            <div class="text-center">
                <h1 class="pt-5 mt-5 mb-5">{{ $header }}</h1>
            </div>
        @endif

        {{ $slot }}
    </main>

    @if (session('message'))
        <x-toast :message="session('message')" :status="session('status')" />
    @endif


    <div class="bg-light w-100">
        <footer class="footer d-flex flex-wrap justify-content-between align-items-center py-3 container">

            <div class="col-md-6 d-flex align-items-center">

                <span class="text-muted"> Copyright &copy; {{ date('Y') }}. All rights Reserved - Official Website
                    of Armoured Vehicles
                    Nigam Limited.</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3">
                    @if (!auth()->guard('applicants')->check())
                        <a href="{{ route('login') }}" class="text-muted">Admin Login</a>
                    @endif
                </li>
                <li class="ms-3"><a class="text-muted" href="#">Terms & Conditions</a></li>
            </ul>
        </footer>

    </div>


</body>

</html>
