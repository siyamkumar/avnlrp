<x-candidate-layout>
    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Experience Details') }}
            {{-- <small class="text-muted fw-light"> | Post Graduation Details </small> --}}
        </h2>
    </x-slot>

    {{-- //{{dd($experiencedetail)}} --}}
    @vite('resources/js/app.js')
    <form method="POST" action="{{ route('experiencedetails.store') }}" enctype="multipart/form-data" >
        @csrf
    {{--  --}}

    @include('applicants.next-steps.experience.form')
       

        <div class="mt-3">
            <button type="submit" class="btn btn-primary"> Save & Continue </button>
        </div>





    </form>
</x-candidate-layout>
