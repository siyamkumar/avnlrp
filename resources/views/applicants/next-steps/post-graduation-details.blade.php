<x-candidate-layout>

    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Education') }} <small class="text-muted fw-light"> | Post Graduation Details </small>
        </h2>
    </x-slot>
    @include('applicants.next-steps.partials.education-menu')

    
    @if (isset($postgraduationeducationdetail))
        @include('applicants.next-steps.partials.postgraduate-education-details.edit')
    @else
        @include('applicants.next-steps.partials.postgraduate-education-details.create')

    @endisset



</x-candidate-layout>
