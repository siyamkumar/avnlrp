<form method="POST" action="{{ route('personaldetails.update', $personaldetail) }}"  enctype="multipart/form-data">
    @csrf @method('PATCH')


    @include('applicants.next-steps.partials.personal-details.form')
    <div class="mt-2">

        <button type="submit" class="btn btn-warning me-2">Update</button>
       
    </div>


</form>
