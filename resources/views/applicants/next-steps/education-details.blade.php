<x-candidate-layout>

    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Education Details') }}
        </h2>
    </x-slot>

    @include('applicants.next-steps.partials.education-menu')

    @if (isset($secondaryeducationdetails))
       {{ $secondaryeducationdetails}}
    @endif

</x-candidate-layout>
