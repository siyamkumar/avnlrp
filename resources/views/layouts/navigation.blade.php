<header class="sticky-top bg-white" style="z-index:9999">
    <div class="px-3 py-2 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <a href="/"
                    class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-decoration-none text-dark">
                    <h6>AVNL CO
                        <br /><span class="small">Recruitment Portal</span>
                    </h6>
                </a>

                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small me-5">
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link text-dark">
                            <x-icons.dashboard />
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('jobs.index') }}" class="nav-link text-dark">
                            <x-icons.job />
                            Jobs
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-dark">
                            <x-icons.application />
                            Applications
                        </a>
                    </li>


                    <li>
                        <a href="#" class="nav-link text-dark">
                            <x-icons.report />
                            Reports
                        </a>
                    </li>


                </ul>
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none show rounded-circle bg-secondary" style="width:30px;height:30px;"
                        data-bs-toggle="dropdown" aria-expanded="true">
                        <div  class="align-middle text-center text-white">
                            A
                        </div>
                       
                    </a>
                    <ul class="dropdown-menu text-small " data-popper-placement="bottom-end"
                        style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 34px);">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</header>
