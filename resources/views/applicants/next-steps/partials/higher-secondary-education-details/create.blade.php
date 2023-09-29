<x-candidate-layout>
<x-slot name="candidateheader">
    <h2 class="">
        {{ __('Education') }} <small class="text-muted fw-light"> | Higher Secondary Details </small>
    </h2>
</x-slot>

<form method="POST" action="{{ route('jobapplication.highersecondaryeducationdetails.store', $jobapplication) }}"    enctype='multipart/form-data'>
    
    
    @csrf
    
    @include('applicants.next-steps.partials.higher-secondary-education-details.form')

    {{-- <button type="submit" class="btn btn-primary mt-3"> Save & Continue </button> --}}


    <div class="">
        <button type="submit" class="btn btn-primary"> Save & Continue </button>
    </div>
    

</form>

</x-candidate-layout>