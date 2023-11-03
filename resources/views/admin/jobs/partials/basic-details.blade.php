<h4 class="pb-3 border-bottom">Basic Details</h4>
<form action="{{ route('jobpostings.store') }}" method="POST">
    @csrf
    <div class="row">

        <div class="col-3 mb-3">
            <label for="" class="form-label">Job Posting Date</label>
            <input type="date" class="form-control @error('jobPostingDate') is-invalid @enderror" id=""
                placeholder="" name="jobPostingDate" value={{ old('jobPostingDate') }}>
            @error('jobPostingDate')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col-3 mb-3"><label for="" class="form-label">Job Advertisment # </label>
            <input type="text" class="form-control @error('jobAdvertismentNo') is-invalid @enderror" id=""
                placeholder="" name="jobAdvertismentNo" value={{ old('jobAdvertismentNo') }}>
            @error('jobAdvertismentNo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-3 mb-3"><label for="" class="form-label">Job Title</label>
            <input type="text" class="form-control {{ $errors->get('jobTitle') ? 'is-invalid' : '' }}" id=""
                placeholder="" name="jobTitle" value={{ old('jobTitle') }}>

            @error('jobTitle')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror


        </div>




        <div class="col-3 mb-3">
            <label for="" class="form-label ">Location</label>
            <select class="form-select @error('location_unit_id') is-invalid @enderror" name="location_unit_id">
                <option value="">Select Location Unit</option>
                @foreach ($locationunits as $locationunit)
                    <option value="{{ $locationunit->id }}"
                        {{ old('location_unit_id') == $locationunit->id ? 'selected' : '' }}>
                        {{ $locationunit->unit_name }}</option>
                @endforeach
            </select>

            @error('location_unit_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-3 mb-3">
            <label for="vacancy" class="form-label">Number of Vacancy</label>
            <input type="number" id="vacancy" name="vacancy"
                class="form-control @error('vacancy') is-invalid @enderror" placeholder="" value={{ old('vacancy') }}>
            @error('vacancy')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <div class="col-3 mb-3">
            <label for="" class="form-label">Tenure <small>(in years)</small></label>
            <input type="number" name="tenure" class="form-control @error('tenure') is-invalid @enderror"
                id="tenure" placeholder="" value="{{ old('tenure') }}">
            @error('tenure')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <div class="col-3 mb-3">
            <label for="" class="form-label">Renumeration</label>
            <input type="number" name="renumeration" class="form-control  @error('renumeration') is-invalid @enderror"
                id="" placeholder="" value="{{ old('renumeration') }}">

            @error('renumeration')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-3 mb-3">
            <label for="" class="form-label">Application Fees</label>
            <input type="number" name="fees" class="form-control  @error('fees') is-invalid @enderror"
                id="" placeholder="" value="{{ old('fees') }}">

            @error('fees')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-12 mb-3">
            <label for="" class="form-label">Job Summary </label>
            <textarea class="form-control  @error('summary') is-invalid @enderror" name="summary" id="summary" rows="3">{{ old('summary') }}</textarea>
            @error('summary')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary mb-3">Next</button>
        </div>

    </div>
</form>
