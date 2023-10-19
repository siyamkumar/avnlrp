<x-app-layout>
    <div class="container mt-3">
    <x-card>
    <h3 style= "text-align:center"> Location Unit </h3>
    <a href="{{ route('locationunit.create') }}" class="btn btn-success btn-sm my-2">
                   <i class="bi bi-plus-circle"></i>  
                    Add New </a>
                <table class="table">
                    <thead>
                      <tr>
                     
                        <th scope="col">Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">About</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                        @foreach ($locationunits as $locationunit)
                        <tr>
                                                       
                            <td>{{ $locationunit->unit_code }}</td>
                            <td>{{ $locationunit->unit_name }}</td>
                            <td>{{ $locationunit->address }}</td>
                            <td>{{ $locationunit->about }}</td>
                            
                            <td>
                                <div class="d-flex align-items-center">
                                <a href="{{ route('locationunit.show', $locationunit->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                <a href="{{ route('locationunit.edit', $locationunit->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

                                <form action="{{ route('locationunit.destroy', $locationunit->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                               
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash" onclick="return confirm('Do you want to delete this product?');"></i> Delete</button>
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