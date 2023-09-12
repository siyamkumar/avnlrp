<form method="POST" action="{{ route('postgraduationeducationdetails.store') }}">

    @csrf

 @include('applicants.next-steps.partials.postgraduate-education-details.form')
    <div class="">
        <button type="submit" class="btn btn-primary"> Save & Continue </button>
    </div>

</form>