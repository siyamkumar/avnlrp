<x-candidate-layout>

    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Education Details') }} <small class="text-muted fw-light"> | Under Graduation Details </small>
        </h2>
    </x-slot>



<form method="POST" action="{{ route('jobapplication.graduationeducationdetails.store', $jobapplication) }}"  enctype='multipart/form-data'>

    @csrf 

 @include('applicants.next-steps.partials.undergraduate-education-details.form')
    <div class="">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>

</form>

</x-candidate-layout>