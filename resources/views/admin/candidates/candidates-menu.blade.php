<nav class="navbar navbar-expand-lg bg-light position-sticky" style="height:5vh;top:10vh;z-index:998">
    <div class="container px-0">
        <div class="" >
            <ul id="job-menu" class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link  {{ request()->routeIs('candidates.index') ? 'active' : '' }}" aria-current="page" href="{{ route('jobpostings.index')}}">All Candidates</a>
                </li>
               

                <li class="nav-item"><a class="nav-link" href="#">Shortlisted Candidates</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Rejected Candidates</a></li>
                

            </ul>
            
        </div>
        <form class="d-flex" role="search">
            <input class="form-control" type="search" placeholder="Search Jobs" aria-label="Search">
            
          </form>
    </div>
</nav>