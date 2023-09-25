<div class="row mt-3 mb-3 g-3 border-bottom pb-3">

    <div class="col-md-8">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="school_name" class="form-label">Name of School</label>
                <input type="text" class="form-control @error('school_name') is-invalid @enderror" id="school_name"
                    name="school_name" value="{{ old('school_name', $secondaryeducationdetail->school_name ?? '') }}"
                    placeholder="School Name">
                @error('school_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="school_board" class="form-label">Name of Board</label>
                <input type="text" class="form-control @error('school_board') is-invalid @enderror "
                    id="school_board" name="school_board"
                    value="{{ old('school_board', $secondaryeducationdetail->school_board ?? '') }}"
                    placeholder="Board Name">
                @error('school_board')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="year_of_passing" class="form-label">Year of Passing</label>
                <input type="text" class="form-control @error('year_of_passing') is-invalid @enderror"
                    id="year_of_passing" name="year_of_passing"
                    value="{{ old('year_of_passing', $secondaryeducationdetail->year_of_passing ?? '') }}"
                    placeholder="Year">
                @error('year_of_passing')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label for="score" class="form-label">Percentage of Marks(%)/CGPA</label>
                <input type="text" class="form-control @error('score') is-invalid @enderror" id="score"
                    name="score" value="{{ old('score', $secondaryeducationdetail->score ?? '') }}"
                    placeholder="% of marks obtained">
                @error('score')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

        </div>
    </div>

    <div class="col-md-4">
        <label for="marksheet_path" class="form-label"> Certificate Upload <span style="color:red">*</span> </label>
        <input type="file" name="marksheet_path" class="filepond"
        value="{{ old('marksheet_path', $secondaryeducationdetail->marksheet_path ?? '') }}" accept="image/*" />
      
    </div>

    {{-- <script type="module">
        const inputElement = document.getElementById('marksheet_path');
        FilePond.create(inputElement, {
            allowImagePreview: true,
            allowMultiple: false,
            labelIdle: 'Drag & Drop your scanned certificate copy or <span class="filepond--label-">Browse</span>',
            credits: false,
            storeAsFile: true,
            size: 0.05,
            allowImagePreview: true


        });
    </script> --}}


</div>
