<x-candidate-layout>

    <x-slot name="candidateheader">

        <h2 class="">
            {{ __(' Secondary Details') }} <small class="text-muted fw-light">  Secondary Details </small>
        </h2>

        
    </x-slot>

    @include('applicants.next-steps.partials.education-menu')

    @isset($secondaryeducationdetail)
        @include('applicants.next-steps.partials.secondary-education-details.edit')
    @else
        @include('applicants.next-steps.partials.secondary-education-details.create')
    @endisset


</x-candidate-layout>
