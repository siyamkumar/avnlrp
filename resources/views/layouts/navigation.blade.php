<header class="sticky-top bg-white">
    <div class="px-3 py-2 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <a href="/"
                    class="brand d-flex align-items-center my-2 my-lg-0 me-lg-auto text-decoration-none text-dark">
                   <img src={{ asset('images/avnllogo.jpg') }} />
                </a>

                <ul id="app-menu" class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small me-5">
                    <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}" class="nav-link text-dark">
                            <x-icons.dashboard />
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item {{ request()->routeIs('jobpostings.*') ? 'active' : '' }}">
                        <a href="{{ route('jobpostings.index') }}" class="nav-link text-dark">
                            <x-icons.job />
                            Jobs
                        </a>
                    </li>
                    <li  class="nav-item {{ request()->routeIs('candidates.*') ? 'active' : '' }}">
                        <a href="{{ route('candidates.index') }}" class="nav-link text-dark">
                            <x-icons.application />
                            Applications
                        </a>
                    </li>


                    <li  class="nav-item {{ request()->routeIs('reports') ? 'active' : '' }}">
                        <a href="{{ route('reports') }}" class="nav-link text-dark">
                            <x-icons.report />
                            Reports
                        </a>
                    </li>

                    <li  class="nav-item {{ request()->routeIs('adminsettings') ? 'active' : '' }}"> <a href="{{ route('adminsettings') }}" class="nav-link text-dark">
                        <x-icons.settings/> Settings </a>
                    </li>


                </ul>
                <div class="dropdown text-end">
                    <a href="#"
                        class="d-block link-body-emphasis text-decoration-none show rounded-circle bg-secondary"
                        style="width:30px;height:30px;" data-bs-toggle="dropdown" aria-expanded="true">
                        <div class="align-middle text-center text-white">
                            A
                        </div>

                    </a>
                    <ul class="dropdown-menu text-small " data-popper-placement="bottom-end"
                        style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 34px);">

                        <li><a class="dropdown-item" href="#">Settings</a></li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form id="frm-logout" action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" class="dropdown-item">Sign out</button>

                            </form>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</header>
