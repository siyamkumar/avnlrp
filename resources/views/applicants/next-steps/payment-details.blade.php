<x-candidate-layout>

    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Payment') }} <small class="text-muted fw-light"> |Payment Details </small>
        </h2>
    </x-slot>

    @include('applicants.next-steps.partials.education-menu')



    @if(isset($highersecondaryeducationdetail))
        @include('applicants.next-steps.partials.payment-details.edit')
    @else
        @include('applicants.next-steps.partials.payment-details.create')
    @endisset

</x-candidate-layout>
