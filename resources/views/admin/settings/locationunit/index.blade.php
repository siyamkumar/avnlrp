<x-app-layout>
    <div class="container pt-3">
        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('adminsettings') }}" class="btn btn-secondary btn-sm">Back</a>
            <h3> Location Unit </h3>
            <a href="{{ route('locationunit.create') }}" class="btn btn-primary btn-sm my-2">Add New</a>
        </div>

        <x-card>


            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th scope="col">Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">About</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($locationunits as $key => $locationunit)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $locationunit->unit_code }}</td>
                            <td>{{ $locationunit->unit_name }}</td>
                            <td>{{ $locationunit->address }}</td>
                            <td>{{ $locationunit->about }}</td>

                            <td width="100">
                                <div class="d-flex">
                                    <x-icons.edit href="{{ route('locationunit.edit', $locationunit) }}" />
                                    <x-icons.delete action="{{ route('locationunit.destroy', $locationunit) }}" />
                                </div>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </x-card>
        <div>
            {{ $locationunits->links() }}
        </div>
    </div>

</x-app-layout>
