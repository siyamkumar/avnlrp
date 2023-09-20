<form method="POST" action="{{ route('paymentdetails.store') }}">
    
    
    @csrf
    
    @include('applicants.next-steps.partials.payment-details.form')

    {{-- <button type="submit" class="btn btn-primary mt-3"> Save & Continue </button> --}}


    <div class="">
        <button type="submit" class="btn btn-primary"> Save & Continue </button>
    </div>
    

</form>
