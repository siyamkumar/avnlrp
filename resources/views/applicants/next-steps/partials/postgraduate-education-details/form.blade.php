<div class="row mt-3 mb-3 g-3 border-bottom pb-3">


    <div class="col-md-4">
        <label for="course_name" class="form-label">Name of Course</label>
        <input type="text" class="form-control
        @error('course_name') is-invalid @enderror
        " id="course_name"
            name="course_name" value = "{{ old('course_name', $postgraduationeducationdetail->course_name ?? '') }}">
        @error('course_name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="college_name" class="form-label">Name of College</label>
        <input type="text" class="form-control @error('college_name') is-invalid @enderror" id="college_name" name="college_name"
            value = "{{ old('college_name', $postgraduationeducationdetail->college_name ?? '') }}">
        @error('college_name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="university_name" class="form-label">Affiliated Institute/University</label>
        <input type="text" class="form-control @error('university_name') is-invalid @enderror" id="university_name"
            name="university_name"
            value = "{{ old('university_name', $postgraduationeducationdetail->university_name ?? '') }}">
        @error('university_name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="year_of_passing" class="form-label">Year of Passing</label>
        <input type="text" class="form-control @error('year_of_passing') is-invalid @enderror" id="year_of_passing"
            name="year_of_passing" placeholder=""
            value = "{{ old('year_of_passing', $postgraduationeducationdetail->year_of_passing ?? '') }}">
        @error('year_of_passing')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="col-md-4">
        <label for="score" class="form-label">Percentage of Marks(%)/CGPA</label>
        <input type="text" class="form-control @error('score') is-invalid @enderror" id="score" name="score"
            placeholder="% of marks obtained" value = "{{ old('score', $postgraduationeducationdetail->score ?? '') }}">
        @error('score')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="postgraduateMarksheet" class="form-label">Degree Upload</label>
        <input type="file" id="postgraduateMarksheet" name="postgraduateMarksheet" class="filepond" />
    </div>


</div>
