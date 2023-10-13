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
        {{-- JOB SUMMARY TAB --}}
        <div class="tab-pane fade show" id="tab-summary" role="tabpanel" aria-labelledby="summary-tab">
            <x-card>
                <h4>Job Summary</h4>
                <form wire:submit="updateSummary">
                    <textarea name="summary" id=""  rows="5" class="form-control mb-3"  wire:model="summary"></textarea>
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
         <div class="tab-pane active  fade show" id="tab-criteria">
            {{-- AGE CRITERIA --}}
            <x-card>
                <h4 class="border-bottom pb-3 mb-3">Age</h4>
                <form wire:submit="updateAgeCriteria">
                    <div class="row ">
                        <div class="col-md-9">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="row">
                                        <label for="minAge" class="col-sm-4 col-form-label">Minimum
                                            Age</label>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control" wire:model = 'minAge'
                                                placeholder="" value="{{ $jobposting->agecriteria->minAge ??'' }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <label for="maxAge" class="col-sm-4 col-form-label">Maximum Age</label>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control" id="maxAge" name="maxAge" wire:model = 'maxAge'
                                                placeholder="" value="{{ $jobposting->agecriteria->maxAge ??'' }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="col-md-3">
                                
                    <div class="d-flex align-items-center">
                        <button type="submit" class="btn btn-warning me-3">Update</button>

                        <div wire:loading wire:target="updateAgeCriteria">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                              </div>
                        </div>
                    </div>
                        </div>
                    
                    
                    
                
                  
                </form>
            </x-card>
        </div>

    </div>
</div>