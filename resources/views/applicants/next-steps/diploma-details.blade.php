<x-guest-layout>
    <form method="POST" 
    {{-- action="{{ route('diploma.store') }}" --}}
    >
        @csrf

        <!-- Diploma Modal-->

        <div class="" id="modalDiploma" tabindex="-1" aria-labelledby="modalLabel5" aria-hidden="true"
            name="modalDiploma">
            <div class="">
                <div class="">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalLabel5" name="modalDiploma">Diploma Details</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="courseName" name="courseName"
                                placeholder="Course Name">
                            <label for="courseDiploma">Name of Course</label>
                        </div>
                        <!-- <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="collegeDiploma" name="collegeDiploma" placeholder="College Name">
                    <label for="collegeDiploma">Name of College</label>
                </div> -->

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="universityName" name="universityName"
                                placeholder="University Name">
                            <label for="universityDiploma">Name of University</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="year" name="year"
                                placeholder="Year">
                            <label for="yearDiploma">Year of Passing</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="marks" name="marks"
                                placeholder="% of marks obtained">
                            <label for="marksDiploma">Percentage of Marks(%)/CGPA</label>
                        </div>
                        <div class="mb-3">
                            <label for="formDiplomaFile" class="form-label">Document Upload</label>
                            <input class="form-control" type="file" id="formDiplomaFile" name="formDiplomaFile">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-guest-layout>