<nav class="navbar navbar-expand-lg bg-light position-sticky" style="height:5vh;top:10vh;z-index:998">
    <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('jobs.index')}}">All Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('jobs.create') ? 'active' : '' }}" href="{{route('jobs.create')}}">New Job Posting</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Drafts</a>
                </li>
            </ul>

        </div>
    </div>
</nav>