<form method="POST" action="{{ route('secondaryeducationdetails.store') }}" id="myForm" enctype='multipart/form-data'>
    @csrf

    @include('applicants.next-steps.partials.education.secondary-form')
    <div class="">
        <button type="submit" class="btn btn-primary"> Save & Continue</button>
    </div>
</form>