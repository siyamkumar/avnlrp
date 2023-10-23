<x-app-layout>
    <div class="container pt-3">

        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('adminsettings') }}" class="btn btn-secondary btn-sm">Back</a>
            <h3> Reservation Category </h3>
            <a href="{{ route('reservationcategory.create') }}" class="btn btn-primary btn-sm my-2">Add New</a>
        </div>

        <x-card>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th scope="col">Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($reservationcategories as $key => $reservationcategory)
                        <tr id="{{ $key }}">
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $reservationcategory->code }}</td>
                            <td>{{ $reservationcategory->name }}</td>
                            <td>
                                <div class="d-flex">
                                    <x-icons.edit
                                        href="{{ route('reservationcategory.edit', $reservationcategory) }}" />
                                    <x-icons.delete
                                        href="{{ route('reservationcategory.destroy', $reservationcategory) }}" />
                                </div>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-card>

        <div>
            {{ $reservationcategories->links() }}
        </div>
    </div>

</x-app-layout>
