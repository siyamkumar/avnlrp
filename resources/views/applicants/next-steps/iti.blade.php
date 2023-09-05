<x-candidate-layout>
    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Education') }} <small class="text-muted fw-light"> | ITI/Diploma Education Details </small>
        </h2>
    </x-slot>
    @include('applicants.next-steps.partials.education-menu')
    <form method="POST" {{-- action="{{ route('iti.store') }}" --}}>
        @csrf



        <div class="row mt-3 mb-3 g-3 border-bottom pb-3">


            <div class="col-md-4">
                <label for="courseITI" class="form-label">Name of Course</label>
                <input type="text" class="form-control" id="courseName" name="courseName" placeholder="Course Name">

            </div>


            <div class="col-md-4">
                <label for="collegeITI" class="form-label">Name of College</label>
                <input type="text" class="form-control" id="collegeITI" name="collegeITI" placeholder="College Name">

            </div>

            <div class="col-md-4">
                <label for="universityITI"class="form-label">Name of University</label>
                <input type="text" class="form-control" id="universityName" name="universityName"
                    placeholder="University Name">

            </div>

            <div class="col-md-4">
                <label for="yearITI" class="form-label">Year of Passing</label>
                <input type="text" class="form-control" id="year" name="year" placeholder="Year">

            </div>
            <div class="col-md-4">
                <label for="marksITI" class="form-label">Percentage of Marks(%)/CGPA</label>
                <input type="text" class="form-control" id="marks" name="marks"
                    placeholder="% of marks obtained">

            </div>
            <div class="col-md-4">
                <label for="formITIFile" class="form-label">Document Upload</label>
                <input class="form-control" type="file" id="formITIFile" name="formITIFile">
            </div>
        </div>

        <div class="">
            <button type="submit" class="btn btn-primary"> Save & Continue </button>
        </div>

    </form>
</x-candidate-layout>
