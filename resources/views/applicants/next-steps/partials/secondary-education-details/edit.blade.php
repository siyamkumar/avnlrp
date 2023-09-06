<form method="POST" action="{{ route('secondaryeducationdetails.update', $secondaryeducationdetail) }}" id="myForm" enctype='multipart/form-data'>
    @csrf @method('PATCH')

    @include('applicants.next-steps.partials.secondary-education-details.form')
    <div class="">
        <button type="submit" class="btn btn-warning"> Update</button>
    </div>
</form>