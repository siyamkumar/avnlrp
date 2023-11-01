<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="">
            {{ __('Jobs') }}
        </h2>
    </x-slot> --}}

 

    @if (count($candidates) > 0)

        <div class="container">
        <h3 class="text-center mb-3">Registered Candidates</h3>
            <div class="row mt-3 mb-3">
                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body">
                     
                        <table class="table">
                            <thead>
                                <th>#</th>
                              
                                <th>Name</th>
                                <th>Email</th>
                                <th>MobileNo</th>
                                <th>Gender</th>
                                <th>Age</th>
                                 <th>Category</th>
                                 <th>Total Applications</th>
                                <th>Reg.Date</th>
                            </thead>

                            <tbody>
                                @foreach ($candidates as $key => $candidate)
                                    <tr >
                                    <td>{{ $candidates->firstItem() + $key }}</td>
                                       
                                        <td>{{ $candidate->fullname ?? '' }}</td>
                                        <td>{{ $candidate->email ?? '' }}</td>
                                        <td>{{ $candidate->phone_no ?? '' }}</td>
                                        <td>{{ $candidate->personaldetails->gender ?? '' }}</td>
                                        @php
    $birthday = $candidate->personaldetails->dob;
    $age = Carbon\Carbon::parse($birthday)->diff(Carbon\Carbon::now())->format('%y years');
@endphp
<td>{{ $age }}</td>



                                        <td>{{ $candidate->personaldetails->reservationcategory->name ?? 'NA' }}</td>
                                        @php
    $count = $candidate->jobapplications->count();
   
@endphp
                                        <td>{{ $count }}</td>
    <td>{{ $candidate->created_at->format('d/M/Y') }}</td>
    </tr> 
                                @endforeach
                            </tbody>
                        </table>
                        {{ $candidates->links() }}
                    </div>
                </div>

          
            </div>
        </div>
    @else
        <div class="container mt-3">
            <x-card>
                There are no job postings to display
            </x-card>
        </div>

    @endif

</x-app-layout>
