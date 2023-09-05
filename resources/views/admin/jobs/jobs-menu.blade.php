<nav class="navbar navbar-expand-lg bg-light position-sticky" style="height:5vh;top:10vh;z-index:998">
    <div class="container px-0">
        <div class="">
            <ul id="job-menu" class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link  {{ request()->routeIs('jobpostings.index') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('jobpostings.index') }}">All Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('jobpostings.create') ? 'active' : '' }}"
                        href="{{ route('jobpostings.create') }}">New Job Posting</a>
                </li>

                <li class="nav-item"><a class="nav-link {{ request()->routeIs('jobpostings.drafts') ? 'active' : '' }}" href="{{ route('jobpostings.drafts') }}">Drafts</a></li>
                <li class="nav-item"><a href="{{ route('jobpostings.active') }}" class="nav-link {{ request()->routeIs('jobpostings.active') ? 'active' : '' }}">Active Jobs</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Completed Jobs</a></li>

            </ul>

        </div>
        <form class="d-flex" role="search">
            <input class="form-control" type="search" placeholder="Search Jobs" aria-label="Search">
        </form>
    </div>
</nav>
