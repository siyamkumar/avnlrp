<x-candidate-layout>
    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('My Applications') }}
            
        </h2>
        
        


    </x-slot>


    <table class="table">
        <tr>
            <th>ARN</th>
            <th>Job Title</th>
            <th>Status</th>
            <th></th>
           
        </tr>

        @foreach ($jobapplications as $key => $ja)
            <tr>
                <td>{{ $ja->arn }} </td>    
                <td>{{ $ja->jobpostings->jobTitle}}</td>
                <td>{{ $ja->status }} </td>
                <td>
                    <a href="{{route('jobapplication.edit', $ja)}}">Edit</a>
                </td>
                <td>Submit</td>
            </tr>
        @endforeach
    </table>



</x-candidate-layout>
