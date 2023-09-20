<div class="row mt-3 mb-3 g-3 border-bottom pb-3">

    <div class="col-md-6">
        <label for="mode_of_payment" class="form-label">Mode of Payment</label>
        <input type="text" class="form-control  @error('mode_of_payment') is-invalid @enderror" id="mode_of_payment"
            name="mode_of_payment" value="{{ old('mode_of_payment', $paymentdetail->mode_of_payment ?? '') }}">
        @error('mode_of_payment')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="col-md-6">
        <label for="fee_details" class="form-label">Transaction ID</label>
        <input type="text" class="form-control  @error('fee_details') is-invalid @enderror" id="fee_details"
            name="fee_details" placeholder="Trans. ID" value="{{ old('fee_details', $paymentdetail->fee_details ?? '') }}">
        @error('fee_details')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

   
    <div class="col-md-4">
        <label for="payment_proof" class="form-label">Payment Proof <span style="color:red">*</span></label>
        <input type="file" name="payment_proof" class="filepond"/>
      
        @error('payment_proof')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    
</div>
