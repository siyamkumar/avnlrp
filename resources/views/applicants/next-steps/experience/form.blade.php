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
                            id="periodTo" name="periodTo"  value="{{ old('periodTo',  $experiencedetail->periodTo ?? '') }}">
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
        <input class="form-check-input @error('jobtype') is-invalid @enderror" type="radio" name="jobtype"
            id="govtJob" value="GovtJob" @if (old('jobtype', $personaldetail->jobtype ?? '') == 'GovtJob') checked @endif>
        <label class="form-check-label" for="govtJob">PSU/GovtJob</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input @error('jobtype') is-invalid @enderror" type="radio" name="jobtype"
            id="privateJob" value="Private" @if (old('jobtype', $personaldetail->jobtype ?? '') == 'Private') checked @endif>
        <label class="form-check-label" for="privateJob">Private</label>
    </div>
  
    @error('jobtype')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    </div>
    </div>
   
    

    <div class="col-md-6 d-none"  id="hiddenDiv">
        <label for="payScale" class="form-label"> Pay Scale(PSUs/Govt.Depts.)</label>


        <select class="form-control @error('payScale') is-invalid @enderror" id="payScale" name="payScale">
            <option value="" selected>Select PayScale</option>
            <option value="SC/ST">E1 </option>
            <option value="OBC">E2</option>
            <option value="EWS">E3</option>
            <option value="UR">E4</option>
            <option value="UR">E5</option>
            <option value="SC/ST">E6 </option>
            <option value="OBC">E7</option>
            <option value="EWS">E8</option>
            <option value="UR">E9</option>
            <option value="UR">E10</option>
            <option value="UR">E11</option>
            {{-- @foreach ($region_states as $state)
                <option value="{{ $state->id }}" @if (old('region_state_id', $personaldetail->region_state_id ?? '') == $state->id) selected @endif>
                    {{ $state->state_name }}</option>
            @endforeach --}}
        </select>
       
        @error('payScale')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
   
    <script type="module">
        // event
      
        document.getElementById('govtJob').addEventListener('click', function(e){
           // if(e.target && e.target.matches("input[type='radio']"))
            if ((e.target.value === 'GovtJob') ) {
           
                document.getElementById('hiddenDiv').classList.remove('d-none');
                document.getElementById('hiddenDiv1').classList.add('d-none');
              
           
         } 
        });
        document.getElementById('privateJob').addEventListener('click', function(e){
           // if(e.target && e.target.matches("input[type='radio']"))
            if ((e.target.value === 'Private') ) {
           
                document.getElementById('hiddenDiv').classList.add('d-none');
                document.getElementById('hiddenDiv1').classList.remove('d-none');
              
           
         } 
        });
            

           
    </script>
   

    <div class="col-md-6 d-none" id="hiddenDiv1">
        <label for="ctc" class="form-label"> CTC</label>
        <input type="text" class="form-control  @error('ctc') is-invalid @enderror" id="ctc" name="ctc"  value="{{ old('ctc', $experiencedetail->ctc ?? '') }}">
        @error('ctc')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="experience_path" class=" form-label">Experience Cerificate</label>
     

        <input type="file" name="experience_path" class="filepond"/>

    </div>



    <div class="col-md-6">
        <label for="jobsSummary" class="form-label"> Jobs Summary</label>
        <textarea class="form-control  @error('jobsSummary') is-invalid @enderror" id="jobsSummary" rows="3" 
        name="jobsSummary"  value="">{{ old('jobsSummary', $experiencedetail->jobsSummary ?? '') }}</textarea>
        @error('jobsSummary')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    
</div>




