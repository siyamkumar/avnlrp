<x-app-layout>
<div class="container pt-3">
        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('adminsettings') }}" class="btn btn-secondary btn-sm">Back</a>
            <h3> User Details</h3>
            <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm my-2">Add New</a>
        </div>

      <x-card>
      <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                     
                        
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($users as $key => $user)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                         
                          

                            <td width="100">
                                <div class="d-flex">
                                    <x-icons.edit href="{{ route('user.edit', $user) }}" />
                                    <x-icons.delete action="{{ route('user.destroy', $user) }}" />
                                </div>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </x-card>
        <div>
            {{ $users->links() }}
        </div>
    </div>

  

</x-app-layout>