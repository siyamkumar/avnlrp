<x-candidate-layout>

    <x-slot name="candidateheader">
        <h2 class="">{{ __('Personal Details') }}</h2>
    </x-slot>


    @if (isset($personaldetail))
        @include('applicants.next-steps.partials.personal-details-edit')
    @else
        @include('applicants.next-steps.partials.personal-details-create')
    @endif
    



</x-candidate-layout>
