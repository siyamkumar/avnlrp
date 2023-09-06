<x-candidate-layout>
    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Experience Details') }}
            {{-- <small class="text-muted fw-light"> | Post Graduation Details </small> --}}
        </h2>
    </x-slot>



    <form method="POST" action="{{ route('experiencedetails.store') }}" >
        @csrf

        <div class="row g-3 pb-3 border-bottom">
            <div class="col-md-6">
                <label for="companyName" class="form-label"> Name of the
                    Company </label>
                <input type="text" readoly class="form-control  @error('companyName') is-invalid @enderror" id="companyName" name="companyName"
                value="{{ old('companyName', $experiencedetail->companyName ?? '') }}">

                @error('companyName')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="col-md-6">
                <label for="postName" class="form-label"> Post Held</label>
                <input type="text" class="form-control  @error('postName') is-invalid @enderror" id="postName" name="postName"
                value="{{ old('postName', $experiencedetail->postName ?? '') }}"
                >
                @error('postName')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="col-md-6">
                <label for="expPeriod" class="form-label">Period of Employment</label>

                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="periodFrom" class="col-md-4 col-form-label">From</label>
                            <div class="col-md-8">
                                <input type="date" class="form-control  @error('periodFrom') is-invalid @enderror" placeholder="From Date" aria-label="FromDate"
                                    id="periodFrom" name="periodFrom"  value="{{ old('periodFrom', $experiencedetail->periodFrom ?? '') }}">
                                    @error('periodFrom')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                        </div>


                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <label for="periodTo" class="col-md-4 col-form-label">To</label>
                            <div class="col-md-8">
                                <input type="date" class="form-control  @error('periodTo') is-invalid @enderror" placeholder="To Date" aria-label="ToDate"
                                    id="periodTo" name="periodTo"  value="{{ old('periodTo', $experiencedetail->periodTo ?? '') }}">
                                    @error('periodTo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                        </div>
                    </div>

                </div>


            </div>

            <div class="col-md-6">
                <label for="payScale" class="form-label"> Pay Scale(PSUs/Govt.Depts.)</label>
                <input type="text" class="form-control  @error('payScale') is-invalid @enderror" id="payScale" name="payScale" 
                 value="{{ old('payScale', $experiencedetail->payScale ?? '') }}">
                @error('payScale')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="col-md-6">
                <label for="ctc" class="form-label"> CTC</label>
                <input type="text" class="form-control  @error('ctc') is-invalid @enderror" id="ctc" name="ctc"  value="{{ old('ctc', $experiencedetail->ctc ?? '') }}">
                @error('ctc')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <label for="experienceFile" class=" form-label">Experience Cerificate</label>
                <input class="form-control  @error('experienceFile') is-invalid @enderror" 
                type="file" id="experienceFile" name="experienceFile"  value="{{ old('experienceFile', $experiencedetail->experienceFile ?? '') }}">
                @error('experienceFile')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>



            <div class="col-md-6">
                <label for="jobsSummary" class="form-label"> Jobs Summary</label>
                <textarea class="form-control  @error('jobsSummary') is-invalid @enderror" id="jobsSummary" rows="3" 
                name="jobsSummary"  value="{{ old('jobsSummary', $experiencedetail->jobsSummary ?? '') }}"></textarea>
                @error('jobsSummary')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>


        <div class="mt-3">
            <button type="submit" class="btn btn-primary"> Save & Continue </button>
        </div>





    </form>
</x-candidate-layout>
