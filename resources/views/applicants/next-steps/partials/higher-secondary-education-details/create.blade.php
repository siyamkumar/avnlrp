<form method="POST" action="{{ route('highersecondaryeducationdetails.store') }}">
    
    
    @csrf
    
    @include('applicants.next-steps.partials.higher-secondary-education-details.form')

    {{-- <button type="submit" class="btn btn-primary mt-3"> Save & Continue </button> --}}


    <div class="">
        <button type="submit" class="btn btn-primary"> Save & Continue </button>
    </div>
    

</form>
