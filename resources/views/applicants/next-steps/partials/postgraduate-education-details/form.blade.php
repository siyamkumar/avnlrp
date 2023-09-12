<div class="row mt-3 mb-3 g-3 border-bottom pb-3">

         
    <div class="col-md-4">
        <label for="course_name" class="form-label">Name of Course</label>
        <input type="text" class="form-control" id="course_name" name="course_name" 
        value = "{{ old('course_name', $postgraduationeducationdetail->course_name ?? '' ) }}" >
    </div>

    <div class="col-md-4">
        <label for="college_name"  class="form-label">Name of College</label>
        <input type="text" class="form-control" id="college_name" name="college_name"    value = "{{ old('college_name', $postgraduationeducationdetail->college_name ?? '') }}">
    </div>

    <div class="col-md-4">
        <label for="university_name"  class="form-label">Name of University</label>
        <input type="text" class="form-control" id="university_name" name="university_name"
        value = "{{ old('university_name', $postgraduationeducationdetail->university_name ?? '') }}">
    
    </div>

    <div class="col-md-4">
        <label for="year_of_passing"  class="form-label">Year of Passing</label>
        <input type="text" class="form-control" id="year_of_passing" name="year_of_passing" placeholder=""    value = "{{ old('year_of_passing', $postgraduationeducationdetail->year_of_passing ?? '') }}"> 
    </div>
    <div class="col-md-4">
        <label for="score"  class="form-label">Percentage of Marks(%)/CGPA</label>
        <input type="text" class="form-control" id="score" name="score"
            placeholder="% of marks obtained"    value = "{{ old('score', $postgraduationeducationdetail->score ?? '') }}">
    </div>
    
    <div class="col-md-4">
        <label for="'marksheet_path'" class="form-label">Degree Upload</label>
        <input class="form-control" type="file" id="'marksheet_path'" name="'marksheet_path'">
    </div>


</div>