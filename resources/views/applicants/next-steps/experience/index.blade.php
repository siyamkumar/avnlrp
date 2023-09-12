<x-candidate-layout>
    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Experience Details') }}
            {{-- <small class="text-muted fw-light"> | Post Graduation Details </small> --}}
        </h2>
        <a href="{{ route('experiencedetails.create') }}" class="btn btn-primary">Add Experience</a>
        


    </x-slot>


    <table class="table experience-table">
        <tr>
            <th>Name of the Company / Organization</th>
            <th>Post Held</th>
            <th>Period of Employment</th>
            <th>Pay Scale/Level & Grade Pay in case of PSUs/Govt. Depts</th>
            <th>CTC (In Rs.) in other cases</th>
            <th>Major Responsibilities</th>
        </tr>

        @foreach ($expdetails as $key => $item)
            <tr>
                <td>{{ $item->companyName }} </td>
                <td>{{ $item->postName }}</td>
                <td>{{ $item->periodFrom->format('M, Y') }} - {{ $item->periodTo->format('M, Y') }}</td>
                <td>{{ $item->payScale }}</td>
                <td>{{ $item->ctc }}</td>
                <td>{{ $item->jobsSummary }}</td>
            </tr>
        @endforeach
    </table>



</x-candidate-layout>
