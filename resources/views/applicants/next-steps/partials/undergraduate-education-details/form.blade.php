<div class="row mt-3 mb-3 g-3 border-bottom pb-3">         
    <div class="col-md-4">
        <label for="course_name" class="form-label">Name of Course</label>
        <input type="text" class="form-control" id="course_name" name="course_name" 
        value = "{{ old('course_name', $graduationeducationdetail->course_name ?? '') }}" >
    </div>

    <div class="col-md-4">
        <label for="college_name"  class="form-label">Name of College</label>
        <input type="text" class="form-control" id="college_name" name="college_name"    value = "{{ old('college_name', $graduationeducationdetail->college_name ?? '') }}">
    </div>

    <div class="col-md-4">
        <label for="university_name"  class="form-label">Affiliated Institute/University</label>
        <input type="text" class="form-control" id="university_name" name="university_name"
        value = "{{ old('university_name', $graduationeducationdetail->university_name ?? '') }}">
    
    </div>

    <div class="col-md-4">
        <label for="year_of_passing"  class="form-label">Year of Passing</label>
        <input type="text" class="form-control" id="year_of_passing" name="year_of_passing" placeholder=""    value = "{{ old('year_of_passing', $graduationeducationdetail->year_of_passing ?? '') }}"> 
    </div>
    <div class="col-md-4">
        <label for="score"  class="form-label">Percentage of Marks(%)/CGPA</label>
        <input type="text" class="form-control" id="score" name="score"
            placeholder="% of marks obtained"    value = "{{ old('score', $graduationeducationdetail->score ?? '') }}">
    </div>
    
    <div class="col-md-4">
        <label for="graduateMarksheet" class="form-label">Degree Certificate Upload</label>
        <input type="file" id="graduateMarksheet" name="graduateMarksheet"  class="filepond  @error('graduateMarksheet') is-invalid @enderror"/>
    </div>
</div>

