<x-candidate-layout>

    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Education') }} <small class="text-muted fw-light"> | Under Graduation Details </small>
        </h2>
    </x-slot>


    @include('applicants.next-steps.partials.education-menu')


    @if (isset($graduationeducationdetail))
        @include('applicants.next-steps.partials.undergraduate-education-details.edit')
    @else
        @include('applicants.next-steps.partials.undergraduate-education-details.create')

    @endisset

</x-candidate-layout>
