<x-candidate-layout>
    <x-slot name="candidateheader">
        <div class="d-flex align-items-center">
          
        </div>
<form method="POST" action="{{ route('secondaryeducationdetails.store',$jobapplication->id) }}" id="myForm" enctype='multipart/form-data'>
    @csrf
    {{dd($jobapplication->id)}}

    @include('applicants.next-steps.partials.secondary-education-details.form')
    <div class="">
        <button type="submit" class="btn btn-primary"> Save & Continue</button>
    </div>
</form>
</x-candidate-layout>
