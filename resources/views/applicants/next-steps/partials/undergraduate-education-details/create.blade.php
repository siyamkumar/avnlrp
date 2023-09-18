<form method="POST" action="{{ route('graduationeducationdetails.store') }}">

    @csrf

 @include('applicants.next-steps.partials.undergraduate-education-details.form')
    <div class="">
        <button type="submit" class="btn btn-primary"> Save & Continue </button>
    </div>

</form>