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
            <th>Sl.No</th>
            <th>Name of the Company / Organization</th>
            <th>Post Held</th>
            <th>Period of Employment From </th>
            <th>Period of Employment To</th>
            <th>Pay Scale  in case of PSUs/Govt. Depts</th>
            <th>CTC (In Rs.) in other cases</th>
            <th>Major Responsibilities</th>
            <th colspan="2" >Action</th>
        </tr>
        @foreach ($expdetails as $key=>$item)
            

      
        <tr>
            <td>{{++$key}} </td>
            <td>{{$item->companyName}} </td>
            <td>{{$item->postName}}</td>
            <td >{{$item->periodFrom}}</td>
            <td >{{$item->periodTo}}</td>
           
            <td>{{$item->payScale}}</td>
            <td>{{$item->ctc}}</td>
            <td>{{$item->jobsSummary}}</td>
            <td> <x-icons.edit href="{{ route('experiencedetails.edit' ,$item) }}" />
            </td>
            {{-- <td>
                <x-icons.delete href="{{ route('experiencedetails.destroy') }}" />
            </td> --}}
            {{-- <td> <a href={{ route('experiencedetails.edit' ,$item) }} class="btn btn-success">Edit</a></td> --}}
        </tr>
        @endforeach
    </table>

    

</x-candidate-layout>
