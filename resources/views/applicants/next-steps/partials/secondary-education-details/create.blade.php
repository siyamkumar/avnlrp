<x-candidate-layout>
    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Education Details') }} | <small class="text-small text-muted">Secondary Education</small>
        </h2>

    </x-slot>
    <form method="POST" action="{{ route('jobapplication.secondaryeducationdetails.store', $jobapplication) }}" id="myForm"
        enctype='multipart/form-data'>
        @csrf

        @include('applicants.next-steps.partials.secondary-education-details.form')
        <div class="">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>
</x-candidate-layout>
