
<x-candidate-layout>

    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Education Details') }} <small class="text-muted fw-light"> | Post Graduation Details </small>
        </h2>
    </x-slot>

<form method="POST" action="{{ route('jobapplication.postgraduationeducationdetails.update',[$jobapplication, $postgraduationeducationdetail] ) }}"  enctype='multipart/form-data'>

    @csrf @method('PATCH')

 @include('applicants.next-steps.partials.postgraduate-education-details.form')
 <div class="mt-2">

    <button type="submit" class="btn btn-warning me-2">Update</button>
   
</div>

</form>


</x-candidate-layout>