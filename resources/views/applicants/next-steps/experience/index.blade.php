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
            <th>Sl.No</th>
            <th>Name of the Company / Organization</th>
            <th>Post Held</th>
            <th>Period of Employment </th>
           
            <th>Pay Scale  in case of PSUs/Govt. Depts</th>
            <th>CTC (In Rs.) in other cases</th>
            <th>Major Responsibilities</th>
            <th >View</th>
            <th colspan="2" >Action</th>
        </tr>

        @foreach ($expdetails as $key => $item)
            <tr>
                <td>{{ ++$key }} </td>
                <td>{{ $item->companyName }} </td>
                <td>{{ $item->postName }}</td>
                <td>{{ Carbon\Carbon::parse ($item->periodFrom)->format('M, Y') }}- {{ Carbon\Carbon::parse ($item->periodTo)->format('M, Y') }}</td>
                <td>{{ $item->payScale }}</td>
                <td>{{ $item->ctc }}</td>
                <td>{{ $item->jobsSummary }}</td>
                <td><a href="{{ route('experiencedetails.show' ,$item->id) }}" data-bs-toggle="modal" data-bs-target="#modalexp">  {{ $item->experience_path }}</a></td>
                <td> <x-icons.edit href="{{ route('experiencedetails.edit', $item) }}" /></td>
            </tr>
        @endforeach
    </table>

    <form >
         
          
     

<!-- experience Modal -->
<div class="modal fade" id="modalexp" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true" name="modalexp">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h1 class="modal-title fs-5" id="modalLabel" name="modalLabel">Preview</h1>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">

    <img src="{{ route('experiencedetails.show' ,$item->id) }}" alt="" width="400px" height="400px">

</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

</div>
</div>
</div>
</div>
</form>



</x-candidate-layout>
