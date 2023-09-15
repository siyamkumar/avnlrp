<div class="row mt-3 mb-3 g-3 border-bottom pb-3">


    <div class="col-md-4">
        <label for="courseName" class="form-label">Name of Course</label>
        <input type="text" class="form-control @error('courseName') is-invalid @enderror" id="courseName" name="courseName" value="{{ old('courseName', $itidiplomadetail->courseName ?? '') }}" placeholder="Course Name">
        @error('courseName')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>


    <div class="col-md-4">
        <label for="collegeName" class="form-label">Name of College</label>
        <input type="text" class="form-control @error('collegeName') is-invalid @enderror" id="collegeName" name="collegeName" value="{{ old('collegeName', $itidiplomadetail->collegeName ?? '') }}" placeholder="College Name" />
        @error('collegeName')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="universityName" class="form-label">Name of University</label>
        <input type="text" class="form-control @error('universityName') is-invalid @enderror" id="universityName" name="universityName" value="{{ old('universityName',$itidiplomadetail->universityName ?? '') }}" placeholder="University Name">
        @error('universityName')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="year_of_passing" class="form-label">Year of Passing</label>
        <input type="text" class="form-control @error('year_of_passing') is-invalid @enderror" id="year_of_passing" name="year_of_passing" value="{{ old('year_of_passing',$itidiplomadetail->year_of_passing ?? '') }}" placeholder="Year">
        @error('year_of_passing')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="col-md-4">
        <label for="score" class="form-label">Percentage of Marks(%)/CGPA</label>
        <input type="text" class="form-control @error('score') is-invalid @enderror" id="score" name="score"  value="{{ old('score',$itidiplomadetail->score ?? '') }}" placeholder="% of marks obtained">
        @error('score')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="col-md-4">
          <input type="file" name="marksheet_path" class="filepond" value=" " accept="iamge/*" 
          />

       
       
  </div>

</div>