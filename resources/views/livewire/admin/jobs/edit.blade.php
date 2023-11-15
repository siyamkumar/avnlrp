<div class="col-md-9">
    <div class="card shadow-none border border-300 mb-3 ">

        <div class="card-body p-0">

            <div class="px-4 py-3">
                <ul class="nav nav-underline" id="myTab" role="tablist">
                    <li class="nav-item text-center" role="presentation" wire:ignore.self>
                        @if ($jobposting->summary)
                            <x-icons.checkok />
                        @else
                            <x-icons.checknotok />
                        @endif
                        <a class="nav-link pt-0" id="summary-tab" data-bs-toggle="tab" href="#tab-summary" role="tab"
                            aria-controls="tab-home" aria-selected="true" wire:ignore>
                            Summary
                        </a>
                    </li>
                    <li class="nav-item text-center" role="presentation" wire:ignore.self>
                        @if ($jobposting->educationcriteria && $jobposting->experiencecriteria && $jobposting->agecriteria)
                            <x-icons.checkok />
                        @elseif($jobposting->educationcriteria || $jobposting->experiencecriteria || $jobposting->agecriteria)
                            <x-icons.checkpartial />
                        @else
                            <x-icons.checknotok />
                        @endif

                        <a class="nav-link pt-0" id="criteria-tab" data-bs-toggle="tab" href="#tab-criteria"
                            role="tab" aria-controls="tab-profile" wire:ignore>
                            Eligibility Criteria</a>
                    </li>

                    <li class="nav-item text-center" role="presentation" wire:ignore.self>

                        @empty($jobposting->feesexemptions)
                            <x-icons.checknotok />
                        @else
                            @if (count($jobposting->feesexemptions) > 0)
                                <x-icons.checkok />
                            @else
                                <x-icons.checknotok />
                            @endif


                        @endempty

                        <a class="nav-link pt-0" id="feesexemption-tab" data-bs-toggle="tab" href="#tab-feesexemption"
                            role="tab" aria-controls="tab-profile" wire:ignore>
                            Fees Exemption</a>
                    </li>

                    <li class="nav-item text-center" role="presentation" wire:ignore.self>

                        @if ($jobposting->jobrequirement)

                            @if (
                                $jobposting->jobrequirement->job_specification &&
                                    $jobposting->jobrequirement->knowledge &&
                                    $jobposting->jobrequirement->skills)
                                <x-icons.checkok />
                            @elseif(
                                $jobposting->jobrequirement->job_specification ||
                                    $jobposting->jobrequirement->knowledge ||
                                    $jobposting->jobrequirement->skill)
                                <x-icons.checkpartial />
                            @else
                                <x-icons.checknotok />

                            @endif
                        @else
                            <x-icons.checknotok />
                        @endif


                        <a class="nav-link pt-0" id="qualification-tab" data-bs-toggle="tab" href="#tab-qualification"
                            role="tab" wire:ignore>Job
                            Requirement</a>
                    </li>

                    <li class="nav-item text-center" role="presentation" wire:ignore.self>
                        @if ($jobposting->jobresponsibility)
                            <x-icons.checkok />
                        @else
                            <x-icons.checknotok />
                        @endif
                        <a class="nav-link pt-0" id="responsibility-tab" data-bs-toggle="tab" href="#tab-responsibility"
                            role="tab" wire:ignore>Job
                            Responsibilities</a>
                    </li>

                    <li class="nav-item text-center" role="presentation" wire:ignore.self>

                        @if ($jobposting->termscondition)
                            <x-icons.checkok />
                        @else
                            <x-icons.checknotok />
                        @endif


                        <a class="nav-link pt-0" id="terms-tab" data-bs-toggle="tab" href="#tab-terms" role="tab"
                            wire:ignore>Terms & Conditions</a>
                    </li>
                    <li class="ms-auto">
                        @php
                            $disabled = true;
                            if ($jobposting->summary && $jobposting->educationcriteria && $jobposting->experiencecriteria && $jobposting->agecriteria && $jobposting->jobrequirement && $jobposting->jobresponsibility) {
                                $disabled = false;
                            }
                        @endphp



                        @if ($jobposting->status == 'draft')
                            <button wire:click="publishJobPosting" class="btn btn-primary"
                                @if ($disabled) disabled @endif>Publish Job
                                Posting </button>
                        @endif
                    </li>


                </ul>

            </div>
        </div>
    </div>

    <div class="tab-content" id="jobTabContent">
        {{-- JOB SUMMARY TAB --}}
        <div class="tab-pane fade show" id="tab-summary" role="tabpanel" aria-labelledby="summary-tab" wire:ignore.self>
            @if ($jobposting->vacancy > 1)
                <livewire:admin.jobs.vacancy :$jobposting>
            @endif
            <x-card>
                <h4>Job Summary</h4>
                <form wire:submit="updateSummary">
                    <textarea name="summary" id="" rows="5" class="form-control mb-3" wire:model="summary"></textarea>
                    <div class="d-flex align-items-center">
                        <button type="submit" class="btn btn-warning me-3">Update</button>

                        <div wire:loading wire:target="updateSummary">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                    @error('summary')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </form>
            </x-card>
        </div>



        {{-- CRITERIA TAB --}}
        <div class="tab-pane fade show" id="tab-criteria" wire:ignore.self>
            {{-- AGE CRITERIA --}}
            <x-card>
                <h4 class="border-bottom pb-3 mb-3">Age</h4>
                <form wire:submit="updateAgeCriteria">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="row">
                                        <label for="minAge" class="col-sm-4 col-form-label">Minimum
                                            Age</label>
                                        <div class="col-sm-6">
                                            <input type="number"
                                                class="form-control  @error('minAge') is-invalid @enderror"
                                                wire:model = 'minAge' id="minAge"
                                                value="{{ $jobposting->agecriteria->minAge ?? '' }}" />

                                            @error('minAge')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <label for="maxAge" class="col-sm-4 col-form-label">Maximum Age</label>
                                        <div class="col-sm-6">
                                            <input type="number"
                                                class="form-control @error('maxAge') is-invalid @enderror"
                                                id="maxAge" wire:model = 'maxAge'
                                                value="{{ $jobposting->agecriteria->maxAge ?? '' }}">
                                            @error('maxAge')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">

                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn btn-warning me-3">Update</button>

                                <div wire:loading wire:target="updateAgeCriteria">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </x-card>

            {{-- EDUCATION CRITERIA --}}
            <x-card>
                <form wire:submit="updateEducationCriteria">
                    <h4 class="border-bottom pb-3 mb-3">Education</h4>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Minimum Education</label>

                                <div class="col-sm-8">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" wire:model="reqEducation" type="checkbox"
                                            id="minEducation10" value="10th" wire:model.defer="reqEducation"
                                            @if ($jobposting->educationcriteria) @if (in_array('10th', $jobposting->educationcriteria->min_qualification)) checked @endif
                                            @endif>
                                        <label class="form-check-label" for="minEducation10">10<sup>th</sup></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" wire:model="reqEducation"
                                            id="minEducation12" value="12th"
                                            @if ($jobposting->educationcriteria) @if (in_array('12th', $jobposting->educationcriteria->min_qualification)) checked @endif
                                            @endif>
                                        <label class="form-check-label" for="minEducation12">12<sup>th</sup></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" wire:model="reqEducation"
                                            id="minEducationIti"
                                            value="ITI"@if ($jobposting->educationcriteria) @if (in_array('ITI', $jobposting->educationcriteria->min_qualification)) checked @endif
                                            @endif>
                                        <label class="form-check-label" for="minEducationIti">ITI</sup></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" wire:model="reqEducation"
                                            id="minEducationDiploma"
                                            value="Diploma"@if ($jobposting->educationcriteria) @if (in_array('Diploma', $jobposting->educationcriteria->min_qualification)) checked @endif
                                            @endif>
                                        <label class="form-check-label"
                                            for="minEducationDiploma">Diploma</sup></label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox"wire:model="reqEducation"
                                            value="UG" id="minEducationUg"
                                            @if ($jobposting->educationcriteria) @if (in_array('UG', $jobposting->educationcriteria->min_qualification)) checked @endif
                                            @endif>
                                        <label class="form-check-label" for="minEducationUg">UG</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" wire:model="reqEducation"
                                            id="minEducationPg" value="PG"
                                            @if ($jobposting->educationcriteria) @if (in_array('PG', $jobposting->educationcriteria->min_qualification)) checked @endif
                                            @endif>
                                        <label class="form-check-label" for="minEducationPg">PG</sup></label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-floating">

                                <input type="text" class="form-control" wire:model="desiredQualification"
                                    id="desiredQualification" />
                                <label for="desiredQualification">Desired Qualification</label>
                            </div>
                        </div>
                        <div class="col-md-2 ms-auto">
                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn btn-warning me-3">Update</button>

                                <div wire:loading wire:target="updateEducationCriteria">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </x-card>

            {{-- EXPERIENCE CRTIERIA --}}
            <x-card>
                <form wire:submit="updateExperienceCriteria">
                    @csrf
                    <h4 class="border-bottom pb-3 mb-3">Experience</h4>
                    <div class="row ">
                        <div class="col-md-10">
                            <div class="row mb-3">

                                <div class="col-md-6">
                                    <div class="row">
                                        <label for="minExp" class="col-sm-4 col-form-label">Minimum
                                            Exp.</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="minExp"
                                                wire:model="minExp" placeholder="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <label for="maxExp" class="col-sm-4 col-form-label">Maximum
                                            Exp.</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" id="maxExp"
                                                wire:model="maxExp" placeholder="">
                                        </div>

                                    </div>
                                </div>




                            </div>

                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-floating">

                                <input type="text" class="form-control w-100" wire:model = "desiredExperience"
                                    id="desiredExperience" placeholder="" />

                                <label for="desiredExperience">Desired Experience</label>
                            </div>
                        </div>
                        <div class="col-md-2 align-self-end">
                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn btn-warning me-3">Update</button>

                                <div wire:loading wire:target="updateExperienceCriteria">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </x-card>

        </div>

        {{-- FEES EXEMPTION TAB --}}
        <div class="tab-pane fade show" id="tab-feesexemption" role="tabpanel" aria-labelledby="feesexemption-tab"
            wire:ignore.self>

            <livewire:admin.jobs.fees-exemption :$jobposting />

        </div>

        {{-- QUALIFICATION/REQUIREMENT TAB --}}
        <div class="tab-pane fade " id="tab-qualification" role="tabpanel" wire:ignore.self>
            <x-card>

                <form wire:submit="updateRequirement">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="col-form-label" for="jobSpecification">Job Specification</label>
                            <textarea id="jobSpecification" class="form-control" wire:model="jobSpecification"
                                placeholder="Please enter Job Requirement"></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="col-form-label" for="jobKnowledge">Knowledge</label>
                            <textarea id="jobKnowledge" cols="30" class="form-control" wire:model="knowledge"
                                placeholder="Please enter Job Knowledge"></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="col-form-label" for="jobSkillCompetency">Skills</label>
                            <textarea name="jobSkillCompetency" id="jobSkillCompetency" cols="30" class="form-control" wire:model="skills"
                                placeholder="Please enter Skill Competency"></textarea>
                        </div>

                        <div class="col-md-12">
                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn btn-warning me-3">Update</button>
                                <div wire:loading wire:target="updateRequirement">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>


            </x-card>

        </div>

        {{-- RESPONSIBILITY TAB --}}
        <div class="tab-pane fade " id="tab-responsibility" role="tabpanel" wire:ignore.self>
            <x-card>
                <form wire:submit='updateJobResponsibility'>

                    <label class="col-form-label" for="jobResponsibility">Key Responsibilities</label>
                    <textarea id="jobResponsibility" class="form-control mb-3" rows="10" wire:model='jobResponsibility'></textarea>
                    <div class="d-flex align-items-center">
                        <button type="submit" class="btn btn-warning me-3">Update</button>
                        <div wire:loading wire:target="updateJobResponsibility">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </form>
            </x-card>
        </div>
        {{-- TERMS & CONDITION --}}
        <div class="tab-pane fade" id="tab-terms" role="tabpanel" wire:ignore.self>
            <x-card>
                <form wire:submit = "updateTerms">
                    @csrf
                    <label class="col-form-label" for="jobTerms">Terms & Condition</label>
                    <textarea name="jobTerms" id="jobTerms" class="form-control mb-3" rows="10" wire:model='terms'></textarea>
                    <div class="d-flex align-items-center">
                        <button type="submit" class="btn btn-warning me-3">Update</button>
                        <div wire:loading wire:target="updateTerms">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                    </div>
                </form>
            </x-card>
        </div>
    </div>
</div>
