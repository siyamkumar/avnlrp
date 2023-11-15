 <nav class="navbar navbar-expand-lg bg-light position-sticky" style="height:5vh;top:10vh;z-index:998">
     <div class="container px-0 align-items-center">
         <form class="d-flex align-items-center" role="search" action="">
             {{-- <div class="dropdown me-3">
                    <button class="btn btn-outline-secondary btn-action rounded-3 dropdown-toggle" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <svg viewBox="0 0 24 24" height="18" class="me-3" fill="none"
                            xmlns="http://www.w3.org/2000/svg">


                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C20.1752 21.4816 19.3001 21.7706 18 21.8985"
                                    stroke="#000000" stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M7 4V2.5" stroke="#000000" stroke-width="1.5" stroke-linecap="round">
                                </path>
                                <path d="M17 4V2.5" stroke="#000000" stroke-width="1.5" stroke-linecap="round">
                                </path>
                                <path d="M21.5 9H16.625H10.75M2 9H5.875" stroke="#000000" stroke-width="1.5"
                                    stroke-linecap="round"></path>
                                <path
                                    d="M18 17C18 17.5523 17.5523 18 17 18C16.4477 18 16 17.5523 16 17C16 16.4477 16.4477 16 17 16C17.5523 16 18 16.4477 18 17Z"
                                    fill="#000000"></path>
                                <path
                                    d="M18 13C18 13.5523 17.5523 14 17 14C16.4477 14 16 13.5523 16 13C16 12.4477 16.4477 12 17 12C17.5523 12 18 12.4477 18 13Z"
                                    fill="#000000"></path>
                                <path
                                    d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z"
                                    fill="#000000"></path>
                                <path
                                    d="M13 13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13C11 12.4477 11.4477 12 12 12C12.5523 12 13 12.4477 13 13Z"
                                    fill="#000000"></path>
                                <path
                                    d="M8 17C8 17.5523 7.55228 18 7 18C6.44772 18 6 17.5523 6 17C6 16.4477 6.44772 16 7 16C7.55228 16 8 16.4477 8 17Z"
                                    fill="#000000"></path>
                                <path
                                    d="M8 13C8 13.5523 7.55228 14 7 14C6.44772 14 6 13.5523 6 13C6 12.4477 6.44772 12 7 12C7.55228 12 8 12.4477 8 13Z"
                                    fill="#000000"></path>
                            </g>
                        </svg> <span class="fw-bold">All Time</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item mb-2" href="#">This Week</a></li>
                        <li><a class="dropdown-item mb-2" href="#">This Month</a></li>
                        <li><a class="dropdown-item mb-2" href="#">This Year</a></li>
                    </ul>
                </div> --}}

             <div class="form-group">
                 <div class="input-group">
                     <div class="input-group-text text-muted">
                         <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke=""
                             width="20">
                             <g>
                                 <path
                                     d="M14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C20.1752 21.4816 19.3001 21.7706 18 21.8985"
                                     stroke="#FF5A5F" stroke-width="1.5" stroke-linecap="round"></path>
                                 <path d="M7 4V2.5" stroke="#FF5A5F" stroke-width="1.5" stroke-linecap="round">
                                 </path>
                                 <path d="M17 4V2.5" stroke="#FF5A5F" stroke-width="1.5" stroke-linecap="round">
                                 </path>
                                 <path d="M21.5 9H16.625H10.75M2 9H5.875" stroke="#FF5A5F" stroke-width="1.5"
                                     stroke-linecap="round"></path>
                                 <path
                                     d="M18 17C18 17.5523 17.5523 18 17 18C16.4477 18 16 17.5523 16 17C16 16.4477 16.4477 16 17 16C17.5523 16 18 16.4477 18 17Z"
                                     fill="#FF5A5F"></path>
                                 <path
                                     d="M18 13C18 13.5523 17.5523 14 17 14C16.4477 14 16 13.5523 16 13C16 12.4477 16.4477 12 17 12C17.5523 12 18 12.4477 18 13Z"
                                     fill="#FF5A5F"></path>
                                 <path
                                     d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z"
                                     fill="#FF5A5F"></path>
                                 <path
                                     d="M13 13C13 13.5523 12.5523 14 12 14C11.4477 14 11 13.5523 11 13C11 12.4477 11.4477 12 12 12C12.5523 12 13 12.4477 13 13Z"
                                     fill="#FF5A5F"></path>
                                 <path
                                     d="M8 17C8 17.5523 7.55228 18 7 18C6.44772 18 6 17.5523 6 17C6 16.4477 6.44772 16 7 16C7.55228 16 8 16.4477 8 17Z"
                                     fill="#FF5A5F"></path>
                                 <path
                                     d="M8 13C8 13.5523 7.55228 14 7 14C6.44772 14 6 13.5523 6 13C6 12.4477 6.44772 12 7 12C7.55228 12 8 12.4477 8 13Z"
                                     fill="#FF5A5F"></path>
                             </g>
                         </svg>
                     </div>
                     <input type="text" name="dateRange" class="form-control" id="dateRangePicker"
                         placeholder="Select From To Date">
                 </div>
             </div>
             <button type="submit" class="ms-3 btn btn-sm btn-outline-secondary btn-action rounded-3">
                 <x-icons.report-small width="20" class="me" /> Get Report
             </button>


             <button id="printTable" type="button" class="ms-3 btn btn-sm btn-outline-secondary btn-action rounded-3">
                 <x-icons.print /> Print
             </button>
         </form>

         <div class="">
             <ul id="" class="navbar-nav mb-2 mb-lg-0">
                 <li class="nav-item">
                     @if (request()->routeIs('reports'))
                         <p class="nav-link active">General Report </p>
                     @else
                         <a class="nav-link  {{ request()->routeIs('reports') ? 'active' : '' }}" aria-current="page"
                             href="{{ route('reports') }}">General Report</a>
                     @endif

                 </li>
                 <li class="nav-item">
                     <a class="nav-link {{ request()->routeIs('unitwisereport') ? 'active' : '' }}"
                         href="{{ route('unitwisereport') }}">Reports by Location</a>
                 </li>

                 {{-- <li class="nav-item"><a class="nav-link {{ request()->routeIs('jobpostings.drafts') ? 'active' : '' }}"
                         href="{{ route('jobpostings.drafts') }}">Reports by Units</a></li> --}}

                 <li>
                 </li>
             </ul>

         </div>



     </div>
 </nav>
