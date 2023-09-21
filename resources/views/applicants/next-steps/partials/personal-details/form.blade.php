<div class="row g-3 border-bottom pb-3">

    <div class="col-md-12">
        <label for="fatherName" class="form-label">Father's/Mother's/Husband's Name </label>
        <input type="text" class="form-control @error('fatherName')  is-invalid   @enderror" id="fatherName"
            name="fatherName" value="{{ old('fatherName', $personaldetail->fatherName ?? '') }}" />

        @error('fatherName')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>


    <div class="col-md-4">

        <label for="gender" class="form-label">Gender*</label>

        <div>
            <div class="form-check form-check-inline">
                <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender"
                    id="genderMale" value="male" @if (old('gender', $personaldetail->gender ?? '') == 'male') checked @endif>
                <label class="form-check-label" for="genderMale">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender"
                    id="genderFemale" value="female" @if (old('gender', $personaldetail->gender ?? '') == 'female') checked @endif>
                <label class="form-check-label" for="genderFemale">Female</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender"
                    id="genderTransgender" value="transgender" @if (old('gender', $personaldetail->gender ?? '') == 'transgender') checked @endif>
                <label class="form-check-label" for="genderTransgender">Transgender</label>

            </div>
            @error('gender')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="col-md-4">

        <label for="dob" class="form-label">Date of Birth </label>
        <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob"
            value="{{ old('dob', $personaldetail ? ($personaldetail->dob ? $personaldetail->dob->format('Y-m-d') : '') : '') }}">

        @error('dob')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-4">

        <label for="" class="form-label ">Reservation Category</label>
        <select class="form-select @error('reservation_category_id') is-invalid @enderror"
            name="reservation_category_id">
            <option value="">Select Category</option>
            @foreach ($reservation_categories as $reservation_category)
                <option value="{{ $reservation_category->id }}"
                    {{ old('reservation_category_id', $personaldetail ? $personaldetail->reservation_category_id : '') == $reservation_category->id ? 'selected' : '' }}>
                    {{ $reservation_category->name }} | {{ $reservation_category->code }}</option>
            @endforeach
        </select>

        @error('reservation_category_id')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-12">
        <b>Communication Address</b>
    </div>

    <div class="col-md-6">

        <input type="text" class="form-control  @error('address_line_1') is-invalid @enderror" id="address_line_1"
            name="address_line_1" value="{{ old('address_line_1', $personaldetail->address_line_1 ?? '') }}"
            placeholder="Address Line 1">
        @error('address_line_1')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>

    <div class="col-md-6">

        <input type="text" class="form-control @error('address_line_2') is-invalid @enderror" id="address_line_2"
            name="address_line_2" value="{{ old('address_line_2', $personaldetail->address_line_2 ?? '') }}"
            placeholder="Address Line 2">
        @error('address_line_2')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror

    </div>

    <div class="col-md-4">

        <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city"
            value="{{ old('city', $personaldetail->city ?? '') }}" placeholder="City">
        @error('city')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

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

    <div class="col-md-4">
        <input type="text" class="form-control @error('pin_code') is-invalid @enderror " placeholder="Pin Code"
            name="pin_code" id="pin_code" value="{{ old('pin_code', $personaldetail->pin_code ?? '') }}">
        @error('pin_code')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="aadhaarNo" class="form-label"> Aadhaar Number</label>
        <input type="text" class="form-control @error('aadhaarNo') is-invalid @enderror" id="aadhaarNo"
            name="aadhaarNo" value="{{ old('aadhaarNo', $personaldetail->aadhaarNo ?? '') }}"
            placeholder="XXXX-XXXX-XXXX"
            @if ($personaldetail) @if ($personaldetail->aadhaarNo) disabled @endif @endif />
        @error('aadhaarNo')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="pan" class="form-label"> PAN </label>
        <input type="text" class="form-control @error('pan') is-invalid @enderror" id="pan" name="pan"
            value="{{ old('pan', $personaldetail->pan ?? '') }}">
        @error('pan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-6">
        <label for="photo_path" class="form-label"> Photo Upload <span style="color:red">*</span> </label>
        <input type="file" name="photo_path" class="filepond"
            value="{{ old('photo_path', $personaldetail->photo_path ?? '') }}" accept="image/*" />
    </div>

    <script type="module">
        const inputElement = document.getElementById('sign_path');

        FilePond.create(inputElement, {
            allowImagePreview: true,
            allowMultiple: false,
            labelIdle: `Drag & Drop  Image or <span class="filepond--label-action">Browse</span>`,
            credits: false,
            storeAsFile: true,
            allowImagePreview: true,



        });
    </script>


    <div class="col-md-6 mb-3">
        <label for="sign_path" class="form-label"> Signature Upload <span style="color:red">*</span></label>
        <input type="file" name="sign_path" id="sign_path" class="filepond"
            value="{{ old('sign_path', $personaldetail->sign_path ?? '') }}" accept="image/*" />
    </div>
</div>

