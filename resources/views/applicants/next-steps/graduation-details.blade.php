<x-candidate-layout>

    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Education') }} <small class="text-muted fw-light"> | Under Graduation Details </small>
        </h2>
    </x-slot>


    @include('applicants.next-steps.partials.education-menu')


    <form method="POST" {{-- action="{{ route('graduate.store') }}" --}}>

        @csrf

        <div class="row mt-3 mb-3 g-3 border-bottom pb-3">

         
                <div class="col-md-4">
                    <label for="courseUG" class="form-label">Name of Course</label>
                    <input type="text" class="form-control" id="courseName" name="courseName" >
                </div>

                <div class="col-md-4">
                    <label for="collegeUG"  class="form-label">Name of College</label>
                    <input type="text" class="form-control" id="collegeUG" name="collegeUG">
                </div>

                <div class="col-md-4">
                    <label for="universityUG"  class="form-label">Name of University</label>
                    <input type="text" class="form-control" id="universityName" name="universityName"
                        >
                
                </div>

                <div class="col-md-4">
                    <label for="yearUG"  class="form-label">Year of Passing</label>
                    <input type="text" class="form-control" id="year" name="year" placeholder="Year">
                </div>
                <div class="col-md-4">
                    <label for="marksUG"  class="form-label">Percentage of Marks(%)/CGPA</label>
                    <input type="text" class="form-control" id="marks" name="marks"
                        placeholder="% of marks obtained">
                </div>
                
                <div class="col-md-4">
                    <label for="degreeUGFile" class="form-label">Degree Upload</label>
                    <input class="form-control" type="file" id="degreeUGFile" name="degreeUGFile">
                </div>
            
          
        </div>
        <div class="">
            <button type="submit" class="btn btn-primary"> Save & Continue </button>
        </div>

    </form>
</x-candidate-layout>
