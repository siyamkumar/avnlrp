<x-candidate-layout>

    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Education') }} <small class="text-muted fw-light"> | Post Graduation Details </small>
        </h2>
    </x-slot>
    @include('applicants.next-steps.partials.education-menu')
    <form method="POST" {{-- action="{{ route('postgraduate.store') }}" --}}>
        @csrf

        <div class="row mt-3 mb-3 g-3 border-bottom pb-3">


            <div class="col-md-4">
                <label for="courseUG" class="form-label">Name of Course</label>
                <input type="text" class="form-control" id="courseName" name="courseName" placeholder="Course Name">
            </div>
            <div class="col-md-4">
                <label for="collegePG" class="form-label">Name of College</label>
                <input type="text" class="form-control" id="collegePG" name="collegePG" placeholder="College Name">
            </div>

            <div class="col-md-4">
                <label for="universityPG" class="form-label">Name of University</label>
                <input type="text" class="form-control" id="universityName" name="universityName"
                    placeholder="University Name">      
            </div>

            <div class="col-md-4">
                <label for="yearPG" class="form-label">Year of Passing</label>
                <input type="text" class="form-control" id="year" name="year" placeholder="Year">
            </div>
            <div class="col-md-4">
                <label for="marksPG" class="form-label">Percentage of Marks(%)/CGPA</label>
                <input type="text" class="form-control" id="marks" name="marks"
                    placeholder="% of marks obtained">
            </div>

            <div class="col-md-4">
                <label for="degreePGFile" class="form-label">Degree Upload</label>
                <input class="form-control" type="file" id="degreePGFile" name="degreePGFile">
            </div>
        </div>

        <div class="">
            <button type="submit" class="btn btn-primary"> Save & Continue </button>
        </div>


    </form>

</x-candidate-layout>
