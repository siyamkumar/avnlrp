<form method="POST" action="{{ route('postgraduationeducationdetails.update', $

) }}">

    @csrf @method('PATCH')

 @include('applicants.next-steps.partials.postgraduate-education-details.form')
 <div class="mt-2">

    <button type="submit" class="btn btn-warning me-2">Update</button>
   
</div>

</form>