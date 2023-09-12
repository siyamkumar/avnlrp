<x-candidate-layout>
    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Experience Details') }}
            {{-- <small class="text-muted fw-light"> | Post Graduation Details </small> --}}
        </h2>
    </x-slot>



    <form method="POST" action="{{ route('experiencedetails.update', $experiencedetail) }}">
        @csrf @method('put')

        @include('applicants.next-steps.experience.form')
       

        <div class="mt-3">
            <button type="submit" class="btn btn-warning"> Update </button>
        </div>





    </form>
</x-candidate-layout>
