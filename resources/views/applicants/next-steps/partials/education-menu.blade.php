<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">

        
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active {{ request()->routeIs('secondaryeducationdetails.*') ? 'sub-menu-active' : '' }}"
                        href="{{ route('secondaryeducationdetails.create') }}">Secondary Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Higher Secondary Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ITI/Diploma Education</a>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="#">Undergraduate Education </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Postgraduate Education </a>
                </li>

            </ul>
        
    </div>
</nav>
