<x-candidate-layout>
    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Experience Details') }}
            {{-- <small class="text-muted fw-light"> | Post Graduation Details </small> --}}
        </h2>
    </x-slot>
    
    <a href="{{route('experiencedetails.create')}}" class="btn btn-primary">Add Experience</a>
    
    <table class="table">
        <tr>
            <th>Name of the Company / Organization</th>
            <th>Post Held</th>
            <th>Period of Employment</th>
            <th>Pay Scale/Level & Grade Pay in case of PSUs/Govt. Depts</th>
            <th>CTC (In Rs.) in other cases</th>
            <th>Major Responsibilities</th>
        </tr>
        
        <tr>
            <td>1</td>
            <td>a</td>
            <td >a</td>
            
            <td>a</td>
            <td>a</td>
            <td>a</td>
        </tr>

    </table>

    

</x-candidate-layout>
