<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="">
            {{ __('Jobposting') }}
        </h2>
    </x-slot> --}}
    <div class="container-fluid">
        <h2 class="pt-3">
            {{ __('Reports') }}
        </h2>
        
        <x-card>   
        <div class="row">
        <div class="col-md-6">
        <label for="date" class="form-label">Date</label>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <label for="periodFrom" class="col-md-4 col-form-label">From</label>
                    <div class="col-md-8">
                        <input type="date" class="form-control  @error('periodFrom') is-invalid @enderror"
                            id="periodFrom" name="periodFrom"
                            value="{{ old('periodFrom') }}">

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
                            value="{{ old('periodTo') }}">
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
    <div class="col-md-6" >
      
        <label for="pareportyScale" class="form-label">report</label>


        <select class="form-control @error('report') is-invalid @enderror" id="report" name="report">
              <option value="" selected>Select</option>
            <option value="1" selected>states</option>
            <option value="2" selected>units</option>
            <option value="3" selected>jobposting</option>


    <div class="col-md-4">
        <select class="form-control @error('region_state_id') is-invalid @enderror" id="region_state_id"
            name="region_state_id">
            <option value="" selected>Select State</option>
            @foreach ($region_states as $state)
                <option value="{{ $state->id }}" @if (old('region_state_id', $personaldetail->region_state_id ?? '') == $state->id) selected @endif>
                    {{ $state->state_name }}</option>
            @endforeach
        </select>
        @error('region_state_id')
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


