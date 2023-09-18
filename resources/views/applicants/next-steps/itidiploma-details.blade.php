<x-candidate-layout>

    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Education') }} <small class="text-muted fw-light"> | ITI/Diploma Details </small>
        </h2>
    </x-slot>
    @include('applicants.next-steps.partials.education-menu')

    
    @if (isset($itidiplomadetail))
        @include('applicants.next-steps.partials.itidiploma-details.itidiploma-edit')
    @else
        @include('applicants.next-steps.partials.itidiploma-details.itidiploma-create')

    @endisset



</x-candidate-layout>
