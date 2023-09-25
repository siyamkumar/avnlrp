<x-app-layout>
    <div class="container">
        <div class="row pt-3 ">
            <div class="col-auto me-auto">
                <small>Edit Job</small>
                <h2>{{ $jobposting->jobTitle }}</h2>
                <small class="text-body-secondary">{{ $jobposting->jobAdvertismentNo }}</small> <x-job-status
                    :status="$jobposting->status" />
            </div>

            <div class="col-auto align-self-end">

                @if ($jobposting->status == 'draft')
                    <form action="">
                        <button type="submit" class="btn btn-primary "> Publish Job Posting </button>
                    </form>
                @endif
            </div>



        </div>


        <div class="row mt-2">
            <div class="col-md-3">
                <div class="position-sticky" style="top: 10vh;">


                    <ul class="card-body list-group">
                        <li class="list-group-item">
                            <small>Job Posting Date</small>
                            <h6> {{ $jobposting->jobPostingDate->format('d/M/Y') }} </h6>
                        </li>
                        <li class="list-group-item"> <small>Last Date for Application</small>
                            <h6> {{ $jobposting->jobPostingLastDate->format('d/M/Y') }} </h6>
                        </li>

                        <li class="list-group-item"> <small>Unit & Location</small>
                            <h6> {{ $jobposting->locationunit->unit_code }} </h6>

                        </li>

                        <li class="list-group-item">
                            <small>Vacancy</small>
                            <h6> {{ $jobposting->vacancy }} </h6>
                        </li>
                        <li class="list-group-item"> <small>Tenure</small>
                            <h6> {{ $jobposting->tenure }} Year(s)</h6>
                        </li>
                        <li class="list-group-item"><small>Renumeration</small>

                            <h6> <x-currency-format :amount="$jobposting->renumeration" /></h6>
                        </li>
                    </ul>




                </div>


            </div>
            <div class="col-md-9">


                <div class="card shadow-none border border-300 mb-3 ">

                    <div class="card-body p-0">

                        <div class="px-4 py-3">
                            <ul class="nav nav-underline" id="myTab" role="tablist">
                                <li class="nav-item text-center" role="presentation">
                                    @if ($jobposting->summary)
                                        <x-icons.checkok />
                                    @endif
                                    <a class="nav-link pt-0" id="summary-tab" data-bs-toggle="tab" href="#tab-summary"
                                        role="tab" aria-controls="tab-home" aria-selected="true">
                                        Summary
                                    </a>
                                </li>
                                <li class="nav-item text-center" role="presentation">
                                    <x-icons.checkpartial />
                                    <a class="nav-link pt-0" id="criteria-tab" data-bs-toggle="tab" href="#tab-criteria"
                                        role="tab" aria-controls="tab-profile" aria-selected="false">
                                        Eligibility Criteria</a>
                                </li>

                                <li class="nav-item text-center" role="presentation">
                                    <x-icons.checknotok />
                                    <a class="nav-link pt-0" id="qualification-tab" data-bs-toggle="tab"
                                        href="#tab-qualification" role="tab" aria-selected="false">Job
                                        Requirement</a>
                                </li>

                                <li class="nav-item text-center" role="presentation">
                                    <x-icons.checknotok />
                                    <a class="nav-link pt-0" id="responsibility-tab" data-bs-toggle="tab"
                                        href="#tab-responsibility" role="tab" aria-selected="false">Job
                                        Responsibilities</a>
                                </li>

                                <li class="nav-item text-center" role="presentation">
                                    <x-icons.checknotok />
                                    <a class="nav-link pt-0 active" id="terms-tab" data-bs-toggle="tab"
                                        href="#tab-terms" role="tab" aria-selected="false">Terms &
                                        Conditions</a>


                            </ul>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="jobTabContent">
                    <div class="tab-pane fade show" id="tab-summary" role="tabpanel" aria-labelledby="summary-tab">

                        @if ($jobposting->vacancy > 1)
                            @include('admin.jobs.partials.vacancy')
                        @endif


                        @include('admin.jobs.partials.summary')
                    </div>

                    <div class="tab-pane  fade show" id="tab-criteria" role="tabpanel" aria-labelledby="criteria-tab">

                        @include('admin.jobs.partials.criteria.agecriteria')

                        @include('admin.jobs.partials.criteria.educationcriteria')

                        @include('admin.jobs.partials.criteria.experiencecriteria')
                    </div>


                    <div class="tab-pane fade show" id="tab-qualification" role="tabpanel"
                        aria-labelledby="qualification-tab">
                        <x-card>
                         
                            @if (
                                )
                         
                            <form action="" method="POST" >
                                @csrf
                               
                                <div class="row">
                                  
                                    <div class="col-md-6 mb-3">
                                        <label class="col-form-label" for="jobSpecification">Job Specification</label>
                                        <textarea name="jobSpecification" id="jobSpecification" class="form-control" placeholder="Please enter Job Requirement">{{ old('job_specification',$jobrequirement->job_specification ?? '') }}</textarea>
                                    </div>
    
                                    <div class="col-md-6 mb-3">
    
                                        <label class="col-form-label" for="jobKnowledge">Knowledge</label>
    
                                        <textarea name="jobKnowledge" id="jobKnowledge" cols="30" class="form-control"
                                            placeholder="Please enter Job Knowledge">{{ old('knowledge',$jobrequirement->knowledge ?? '') }}</textarea>
                                    </div>
    
                                    <div class="col-md-6 mb-3">
    
                                        <label class="col-form-label" for="jobSkillCompetency">Skills</label>
    
                                        <textarea name="jobSkillCompetency" id="jobSkillCompetency" cols="30" class="form-control"
                                            placeholder="Please enter Skill Competency">{{old('skills',$jobrequirement->skills ?? '') }}</textarea>
                                    </div>
    
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-warning">Update</button>
                                    </div>
    
                                </div>
                            </form>

                           @else

                        <form action=" {{ route('jobpostings.jobrequirement.store', $jobposting) }}  " method="POST" >
                            @csrf
                           
                            <div class="row">
                              
                                <div class="col-md-6 mb-3">
                                    <label class="col-form-label" for="jobSpecification">Job Specification</label>
                                    <textarea name="jobSpecification" id="jobSpecification" class="form-control" placeholder="Please enter Job Requirement">{{ old('jobSpecification') }}</textarea>
                                </div>

                                <div class="col-md-6 mb-3">

                                    <label class="col-form-label" for="jobKnowledge">Knowledge</label>

                                    <textarea name="jobKnowledge" id="jobKnowledge" cols="30" class="form-control"
                                        placeholder="Please enter Job Knowledge">{{ old('jobKnowledge') }}</textarea>
                                </div>

                                <div class="col-md-6 mb-3">

                                    <label class="col-form-label" for="jobSkillCompetency">Skills</label>

                                    <textarea name="jobSkillCompetency" id="jobSkillCompetency" cols="30" class="form-control"
                                        placeholder="Please enter Skill Competency">{{ old('jobSkillCompetency') }}</textarea>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>

                            </div>
                        </form>
                     @endif
                        </x-card>

                    </div>

                    <div class="tab-pane fade show" id="tab-responsibility" role="tabpanel">
                        <x-card>
                            <form action="{{ route('jobpostings.jobresponsibility.store', $jobposting) }}" method="POST">
                                @csrf
                                <label class="col-form-label" for="jobResponsibility">Key Responsibilities</label>
                                <textarea name="jobResponsibility" id="jobResponsibility" class="form-control mb-3" rows="10"></textarea>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </x-card>
                    </div>

                    <div class="tab-pane active fade show" id="tab-terms" role="tabpanel">
                        <x-card>
                            <form action="{{ route('jobpostings.termscondition.store', $jobposting) }}" method="POST">
                                @csrf
                                <label class="col-form-label" for="jobTerms">Terms & Condition</label>
                                <textarea name="jobTerms" id="jobTerms" class="form-control mb-3" rows="10"></textarea>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </x-card>
                    </div>

                </div>

            </div>



        </div>




    </div>

</x-app-layout>
