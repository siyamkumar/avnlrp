<x-guest-layout>

    <div class="home-page-header p-5 text-center">

        <h1 class="mt-5 display-5 fw-bold text-body-emphasis">AVNL Recruitment</h1>
        <div class="col-lg-6 mx-auto">
            <p class="home-page-header-description mb-4">Empowering job seekers to find the right job at AVNL, a new
                Defence PSU with its
                headquarters at Avadi (Chennai) which
                has five (05) constituent production units and has around 12,000 employees. AVNL offers a great work
                environment and challenging opportunities for the
                professionals to prove their mettle.</p>
            <form action="{{ route('jobs.index') }}">
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center form-search-container">

                    <input class="form-control form-search" type="text" placeholder="Search Job Openings..."
                        name="search">
                    <button type="submit" class="btn d-flex align-items-center form-search-button">
                        <x-icons.search width="26" /> Search
                    </button>

                </div>
            </form>
        </div>
    </div>

    <div class="bg-white pt-3">
        <div class="container px-4 py-2" id="custom-cards">
            <div class="d-flex border-bottom">
                <h3 class="pb-3 ">Recent Openings</h3>
            </div>


            <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">

                @if (count($jobpostings) > 0)
                    @foreach ($jobpostings as $jobposting)
                        <div class="col job-card">

                            <div class="card card-cover h-100 overflow-hidden border-0 rounded-4"
                                style="background-image: linear-gradient(-225deg, #FFFEFF 0%, #D7FFFE 100%);">
                                <a href="{{ route('jobs.show', $jobposting) }}" class="text-decoration-none">
                                    <div class="d-flex flex-column h-100 p-5 pb-3 text-dark">

                                        <b>{{ $jobposting->locationunit->unit_name ?? '' }}</b>
                                        <small>{{ $jobposting->locationunit->address ?? '' }}</small>

                                        <div class="pt-3 mt-2 mb-4">
                                            @if ($jobposting->isContract)
                                                <small>Engagement of Professional <br />on fixed term contract
                                                    basis</small>
                                            @endif
                                            <h3 class="pt-1 display-6 lh-1 fw-bold">{{ $jobposting->jobTitle }}</h3>
                                        </div>


                                        <ul class="d-flex list-unstyled mt-auto">
                                            <li class="me-auto">
                                                No. of Vacancies
                                            </li>
                                            <li class="d-flex align-items-center me-3">
                                                <h6> {{ $jobposting->vacancy }} </h6>
                                            </li>

                                        </ul>
                                    </div>
                                </a>

                            </div>
                        </div>
                    @endforeach

                @endif







            </div>
        </div>
    </div>


</x-guest-layout>
