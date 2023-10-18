<div class="row g-3 pb-3 border-bottom">
    <div class="col-md-6">
        <label for="companyName" class="form-label"> Name of the
            Company </label>
        <input type="text" readoly class="form-control  @error('companyName') is-invalid @enderror" id="companyName"
            name="companyName" value="{{ old('companyName', $experiencedetail->companyName ?? '') }}">

        @error('companyName')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="postName" class="form-label"> Post Held</label>
        <input type="text" class="form-control  @error('postName') is-invalid @enderror" id="postName"
            name="postName" value="{{ old('postName', $experiencedetail->postName ?? '') }}">
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
                        <input type="date" class="form-control  @error('periodFrom') is-invalid @enderror"
                            id="periodFrom" name="periodFrom"
                            value="{{ old('periodFrom', isset($experiencedetail) ? ($experiencedetail->periodFrom ? $experiencedetail->periodFrom->format('Y-m-d') : '') : '') }}">

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
                        <input type="date" class="form-control  @error('periodTo') is-invalid @enderror"
                            id="periodTo" name="periodTo"
                            value="{{ old('periodTo', isset($experiencedetail) ? ($experiencedetail->periodTo ? $experiencedetail->periodTo->format('Y-m-d') : '') : '') }}">
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
        <label for="jobtype" class="form-label"> Type of Job</label>
        <div>
            <div class="form-check form-check-inline">
                <input class="form-check-input @error('jobType') is-invalid @enderror" type="radio" name="jobType"
                    id="govtJob" value="GovtJob" @if (old('jobType', $experiencedetail->jobType ?? '') == 'GovtJob') checked @endif>
                <label class="form-check-label" for="govtJob">PSU/Govt. Job</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input @error('jobtype') is-invalid @enderror" type="radio" name="jobType"
                    id="privateJob" value="Private" @if (old('jobType', $experiencedetail->jobType ?? '') == 'Private') checked @endif>
                <label class="form-check-label" for="privateJob">Private</label>
            </div>

            @error('jobtype')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>




    <div class="col-md-6 @isset($experiencedetail)
    @if ($experiencedetail->jobType !== 'GovtJob') d-none @endif
    @endisset "
        id="hiddenDiv">
        <label for="payScale" class="form-label"> Pay Scale(PSUs/Govt.Depts.)</label>


        <select class="form-control @error('payScale') is-invalid @enderror" id="payScale" name="payScale">
            <option value="" selected>Select PayScale</option>
            <option value="E1" @isset($experiencedetail) @if ($experiencedetail->payScale == 'E1') selected @endif @endisset>E1 </option>
            <option value="E2"@isset($experiencedetail) @if ($experiencedetail->payScale == 'E2') selected @endif @endisset>E2</option>
            <option value="E3" @isset($experiencedetail)@if ($experiencedetail->payScale == 'E3') selected @endif @endisset>E3</option>
            <option value="E4" @isset($experiencedetail)@if ($experiencedetail->payScale == 'E4') selected @endif @endisset>E4</option>
            <option value="E5" @isset($experiencedetail)@if ($experiencedetail->payScale == 'E5') selected @endif @endisset>E5</option>
            <option value="E6" @isset($experiencedetail)@if ($experiencedetail->payScale == 'E6') selected @endif @endisset>E6 </option>
            <option value="E7" @isset($experiencedetail)@if ($experiencedetail->payScale == 'E7') selected @endif @endisset>E7</option>
            <option value="E8" @isset($experiencedetail)@if ($experiencedetail->payScale == 'E8') selected @endif @endisset>E8</option>
            <option value="E9" @isset($experiencedetail)@if ($experiencedetail->payScale == 'E9') selected @endif @endisset>E9</option>
            <option value="E10" @isset($experiencedetail)@if ($experiencedetail->payScale == 'E10') selected @endif @endisset>E10</option>
            <option value="E11" @isset($experiencedetail)@if ($experiencedetail->payScale == 'E11') selected @endif @endisset>E11</option>
        </select>

        @error('payScale')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <script type="module">
        // event

        document.getElementById('govtJob').addEventListener('click', function(e) {
            // if(e.target && e.target.matches("input[type='radio']"))
            if ((e.target.value === 'GovtJob')) {

                document.getElementById('hiddenDiv').classList.remove('d-none');
                document.getElementById('hiddenDiv1').classList.add('d-none');


            }
        });
        document.getElementById('privateJob').addEventListener('click', function(e) {
            // if(e.target && e.target.matches("input[type='radio']"))
            if ((e.target.value === 'Private')) {

                document.getElementById('hiddenDiv').classList.add('d-none');
                document.getElementById('hiddenDiv1').classList.remove('d-none');


            }
        });
    </script>


    <div class="col-md-6 @isset($experiencedetail) @if ($experiencedetail->jobType !== 'Private') d-none @endif @endisset" id="hiddenDiv1">
        <label for="ctc" class="form-label"> CTC</label>
        <input type="text" class="form-control  @error('ctc') is-invalid @enderror" id="ctc" name="ctc"
            value="{{ old('ctc', $experiencedetail->ctc ?? '') }}">
        @error('ctc')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="expCertificate" class=" form-label">Experience Cerificate <span style="color:Red">*</span></label>


        <input id="expCertificate" type="file" name="expCertificate" class="filepond" />

    </div>



    <div class="col-md-6">
        <label for="jobsSummary" class="form-label"> Jobs Summary</label>
        <textarea class="form-control  @error('jobsSummary') is-invalid @enderror" id="jobsSummary" rows="3"
            name="jobsSummary" value="">{{ old('jobsSummary', $experiencedetail->jobsSummary ?? '') }}</textarea>
        @error('jobsSummary')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

</div>
