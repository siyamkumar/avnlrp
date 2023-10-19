<x-app-layout>
    <div class="container mt-3">
    <x-card>
    <h3 style= "text-align:center"> Reservation Category </h3>
    <a href="{{ route('reservationcategory.create') }}" class="btn btn-success btn-sm my-2">
                   <i class="bi bi-plus-circle"></i>  
                    Add New </a>
                <table class="table">
                    <thead>
                <tr>
       
            <th scope="col">Code</th>
            <th scope="col">Name</th>
       
             <th scope="col">Action</th>
            </tr>
</thead>
<tbody>
            @foreach ($reservationcategorys as $reservationcategory)
        <tr>
            <td>{{ $reservationcategory->code }}</td>
            <td>{{ $reservationcategory->name }}</td>
            <td>
           <div class="d-flex align-items-center">
           <a class="btn btn-info" href="{{ route('reservationcategory.show',$reservationcategory->id) }}">Show</a>
           <a class="btn btn-primary" href="{{ route('reservationcategory.edit',$reservationcategory->id) }}">Edit</a>
           <form action="{{ route('reservationcategory.destroy',$reservationcategory->id) }}" method="POST">
                @csrf
                 @method('DELETE')
                   

   <button type="submit" class="btn btn-danger">Delete</button>
</form>
</div>
            </td>
        </tr>
        @endforeach
</tbody>
    </table>
    </x-card>
    </div>

</x-app-layout>