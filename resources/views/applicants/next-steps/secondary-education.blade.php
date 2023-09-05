<x-candidate-layout>

    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Education Details') }} <small class="text-muted fw-light"> | Secondary Education </small>
        </h2>
    </x-slot>

    @include('applicants.next-steps.partials.education-menu')

    @isset($secondaryeducationdetail)
        
    @else
        @include('applicants.next-steps.partials.education.secondary-create')
    @endisset


</x-candidate-layout>
