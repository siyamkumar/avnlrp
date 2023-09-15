<form method="POST" action="{{ route('itidiplomadetails.store')}}" enctype="multipart/form-data" >
    @csrf

    @include('applicants.next-steps.partials.itidiploma-details.itidiploma-form')
   
    <button type="submit" class="btn btn-primary mt-3"> Save & Continue </button>
   
</form>
