<form method="POST" action="{{ route('personaldetails.store') }}">
    @csrf


    @include('applicants.next-steps.partials.personal-details.form')

    <button type="submit" class="btn btn-primary mt-3"> Save & Continue </button>



</form>
