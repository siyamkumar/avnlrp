<x-app-layout>

    @livewireStyles


    <nav class="navbar navbar-expand-lg bg-light position-sticky" style="height:5vh;top:10vh">
        <div class="container px-0">
            <div class="">
                <ul id="job-menu" class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link  @if($shortlisted || $rejected)  @else active @endif"
                            aria-current="page" href="{{ route('jobpostings.applications.index', $jobposting) }}">All
                            Candidates</a>
                    </li>


                    <li class="nav-item"><a class="nav-link   @if($shortlisted) active @endif  }}" 
                            href="{{ route('jobpostings.applications.index', [$jobposting, 'shortlisted=true']) }}">Shortlisted
                            Candidates</a></li>
                    <li class="nav-item"><a
                            href="{{ route('jobpostings.applications.index', [$jobposting, 'rejected=true']) }}"
                            class="nav-link  @if($rejected) active @endif }}">Rejected Candidates</a></li>


                </ul>

            </div>
         
        </div>
    </nav>



    <div class="container">
        <div class="row g-0 py-3">
            <div class="col-md-3">
                <div class="card rounded-0 border rounded-start border-end-0">
                    <div class="card-body p-0">
                        <div class="arn-sidebar" style="height: 74vh; 
                        overflow-y: auto;">

                            <ul class="nav" id="arn-sidebar">
                                @foreach ($applications as $key => $app)
                                    <li class="nav-item" role="presentation" height="">
                                        <a class="nav-link @if ($loop->first) active @endif"
                                            id="{{ $key }}" data-bs-toggle="tab" href="#{{ $app->arn }}"
                                            role="tab" aria-controls="tab-home">
                                            <div class="">
                                                <small>{{ $app->jobpostings->locationunit->unit_code }}</small>
                                                <div class="d-flex align-items-center gap-2">
                                                    <h6 class="arn-title mb-0"># {{ $app->arn }}</h6>
                                                    <x-arnstatus :status="$app->status" />

                                                </div>

                                                <div>
                                                    {{ $app->jobpostings->jobTitle }}


                                                </div>

                                            </div>


                                        </a>
                                    </li>
                                @endforeach

                            </ul>



                        </div>

                        <div class="position-sticky pt-2 px-2 bottom-0 bg-white"
                            style="height:5vh;box-shadow: 0px -5px 15px -3px rgba(0,0,0,0.1);">
                            {{ $applications->links() }}
                        </div>




                    </div>
                </div>


            </div>
            <div class="col-9">

                <div class="rounded-0 border rounded-end">
                    <div class="px-0 py-0">

                        <div class="tab-content arn-content" style="height: 79vh; overflow-y: auto;">

                            @foreach ($applications as $key => $app)
                                <div class="tab-pane fade @if ($loop->first) active show @endif"
                                    id="{{ $app->arn }}">

                                    <livewire:arns :arn="$app" />




                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @livewireScripts


</x-app-layout>
