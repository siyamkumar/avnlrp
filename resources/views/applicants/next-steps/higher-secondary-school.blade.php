<x-candidate-layout>

    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Education') }} <small class="text-muted fw-light"> | Higher Secondary Education Details </small>
        </h2>
    </x-slot>

    @include('applicants.next-steps.partials.education-menu')


    <form method="POST" 
    {{-- action="{{ route('highersecondary.store') }}" --}}
    >
        @csrf

        <div class="row mt-3 mb-3 g-3 border-bottom pb-3">

            <div class="col-md-6">
                <label for="schoolTwelveth" class="form-label">Name of School</label>
                <input type="text" class="form-control" id="schoolName" name="schoolName">
            </div>

            <div class="col-md-6">
                <label for="boardTwelveth" class="form-label">Name of Board</label>
                <input type="text" class="form-control" id="boardName" name="boardName" placeholder="Board Name">
            </div>

            <div class="col-md-4">
                <label for="yearTwelveth" class="form-label">Year of Passing</label>
                <input type="text" class="form-control" id="year" name="year" placeholder="Year">
            </div>

            <div class="col-md-4">
                <label for="marksTwelveth" class="form-label">Percentage of Marks(%)/CGPA</label>
                <input type="text" class="form-control" id="marks" name="marks"
                    placeholder="% of marks obtained">
            </div>

            <div class="col-md-4">
                <label for="form12thFile" class="form-label">Document Upload</label>
                <input class="form-control" type="file" id="form12thFile" name="form12thFile">
            </div>
        </div>

        <div class="">
            <button type="submit" class="btn btn-primary"> Save & Continue </button>
        </div>
    </form>

</x-candidate-layout>
