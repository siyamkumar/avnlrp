<x-candidate-layout>

    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Education') }} <small class="text-muted fw-light"> | Higher Secondary Education Details </small>
        </h2>
    </x-slot>

    @include('applicants.next-steps.partials.education-menu')



    @if(isset($highersecondaryeducationdetail))
        @include('applicants.next-steps.partials.higher-secondary-education-details.edit')
    @else
        @include('applicants.next-steps.partials.higher-secondary-education-details.create')
    @endisset

</x-candidate-layout>
