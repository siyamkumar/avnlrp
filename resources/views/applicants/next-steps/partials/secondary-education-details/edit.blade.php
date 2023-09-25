<x-candidate-layout>
    <form method="POST"
        action="{{ route('jobapplication.secondaryeducationdetails.update', ['jobapplication'=> $secondaryeducationdetail,
         'secondaryeducationdetail'=> $secondaryeducationdetail]) }}"
        id="myForm" enctype='multipart/form-data'>
        @csrf @method('PATCH')

        @include('applicants.next-steps.partials.secondary-education-details.form')
        <div class="">
            <button type="submit" class="btn btn-warning"> Update</button>
        </div>
    </form>
</x-candidate-layout>
