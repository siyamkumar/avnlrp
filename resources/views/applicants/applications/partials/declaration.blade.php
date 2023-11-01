@if ($jobapplication->isSubmitted)
    <x-card>

        <div class="d-flex align-items-center">
            <div class="border rounded-circle d-flex justify-center align-items-center me-3 p-3 bg-light">
                <svg fill="#5B626F" width="30" viewBox="0 0 512 512">
                    <g>
                        <path
                            d="M392.943,112.864H332.66c-2.808-10.057-6.617-19.767-11.273-28.769h71.557c23.185,0,42.047-18.863,42.047-42.047 S416.129,0,392.944,0H119.056C95.871,0,77.009,18.863,77.009,42.047s18.863,42.047,42.047,42.047h64.51 c22.431,0,43.529,10.96,56.823,28.769H119.056c-23.185,0-42.047,18.863-42.047,42.047c0,23.185,18.863,42.047,42.047,42.047 h121.447c-13.279,17.809-34.419,28.769-56.936,28.769h-64.51c-23.185,0-42.047,18.739-42.047,41.771 c0,11.666,4.714,22.49,13.281,30.523l181.148,200.173c7.937,8.773,19.305,13.806,31.191,13.806 c10.427,0,20.441-3.865,28.198-10.884c8.329-7.535,13.225-17.863,13.786-29.082c0.561-11.221-3.279-21.986-10.818-30.321 L211.667,306.963c44.675-8.307,83.878-36.25,106.933-76.969c2.258-3.988,0.855-9.052-3.133-11.311 c-3.988-2.257-9.052-0.855-11.311,3.133c-23.07,40.742-64.156,67.178-109.909,70.716c-3.158,0.245-5.901,2.264-7.072,5.206 s-0.564,6.294,1.562,8.641l132.753,146.475c4.561,5.041,6.885,11.557,6.545,18.35c-0.34,6.792-3.303,13.043-8.345,17.604 c-4.7,4.252-10.76,6.594-17.062,6.594c-7.204,0-14.087-3.041-18.884-8.343L102.357,286.619c-0.169-0.187-0.346-0.366-0.531-0.537 c-5.3-4.88-8.219-11.48-8.219-18.584c0-13.88,11.417-25.173,25.45-25.173h64.51c33.529,0,64.57-19.664,79.081-50.094 c1.226-2.57,1.047-5.591-0.472-8c-1.52-2.409-4.17-3.869-7.019-3.869h-136.1c-14.033,0-25.45-11.416-25.45-25.45 s11.417-25.45,25.45-25.45h136.002c2.85,0,5.502-1.463,7.021-3.875c1.52-2.412,1.695-5.434,0.465-8.006 c-14.557-30.426-45.558-50.085-78.978-50.085h-64.51c-14.033,0-25.45-11.416-25.45-25.45s11.417-25.45,25.45-25.45h273.887 c14.033,0,25.45,11.416,25.45,25.45s-11.417,25.45-25.45,25.45h-86.046c-3.06,0-5.871,1.683-7.315,4.381 c-1.445,2.698-1.288,5.971,0.407,8.517c8.255,12.398,14.531,27.148,18.151,42.655c0.876,3.755,4.225,6.412,8.082,6.412h66.721 c14.033,0,25.45,11.416,25.45,25.45c0,14.034-11.417,25.45-25.45,25.45h-66.97c-4.583,0-8.299,3.715-8.299,8.299 c0,4.584,3.716,8.299,8.299,8.299h66.97c23.185,0,42.047-18.863,42.047-42.047C434.99,131.726,416.128,112.864,392.943,112.864z">
                        </path>
                    </g>
                </svg>
            </div>

            <h3>Fee Details</h3>

        </div>

        <div class="row mt-3 mb-3 g-3 border-bottom pb-3">

            <div class="col-md-4">

                <label for="mode_of_payment" class="form-label">Payment Fee</label>

                <input type="text" class="form-control  @error('mode_of_payment') is-invalid @enderror"
                    id="mode_of_payment" name="mode_of_payment" value="₹ 300 /-" disabled>
                @error('mode_of_payment')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="fee_details" class="form-label">Transaction ID</label>
                <input type="text" class="form-control  @error('fee_details') is-invalid @enderror" id="fee_details"
                    name="fee_details" placeholder="Trans. ID" value="XXXXAYYDDD999999" disabled
                    value="{{ old('fee_details', $paymentdetail->fee_details ?? '') }}">
                @error('fee_details')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="col-md-4">
                <label for="payment_proof" class="form-label">Payment Proof <span style="color:red">*</span></label>
                <br />
                <a href="{{ url('storage/public/' . $jobapplication->payment_proof ?? '') }}" target="_blank">Payment
                    Proof</a>
            </div>


        </div>

        <div class="d-flex align-items-center">
            <div class="border rounded-circle d-flex justify-center align-items-center me-3 p-3 bg-light">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="30">
                    <g>
                        <path
                            d="M2 12C2 16.714 2 19.0711 3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12V10.5M13.5 2H12C7.28595 2 4.92893 2 3.46447 3.46447C2.49073 4.43821 2.16444 5.80655 2.0551 8"
                            stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                        <path
                            d="M16.652 3.45506L17.3009 2.80624C18.3759 1.73125 20.1188 1.73125 21.1938 2.80624C22.2687 3.88124 22.2687 5.62415 21.1938 6.69914L20.5449 7.34795M16.652 3.45506C16.652 3.45506 16.7331 4.83379 17.9497 6.05032C19.1662 7.26685 20.5449 7.34795 20.5449 7.34795M16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9M20.5449 7.34795L17.5625 10.3304M14.5801 13.3128C14.1761 13.7168 13.9741 13.9188 13.7513 14.0926C13.4886 14.2975 13.2043 14.4732 12.9035 14.6166C12.6485 14.7381 12.3775 14.8284 11.8354 15.0091L10.1 15.5876M10.1 15.5876L8.97709 15.9619C8.71035 16.0508 8.41626 15.9814 8.21744 15.7826C8.01862 15.5837 7.9492 15.2897 8.03811 15.0229L8.41242 13.9M10.1 15.5876L8.41242 13.9"
                            stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                    </g>
                </svg>
            </div>

            <h3>Declaration</h3>

        </div>



        <p class="text-justify">I, the undersigned, certify that to the best of my knowledge and belief, this
            CV correctly describes myself, my qualifications, and my experience. I understand that any wilful
            misstatement described herein may lead to my disqualification or dismissal, if engaged.

        </p>




        <div class="row mb-3">
            <div class="col-md-4">
                <label for="" class="form-label">Date :</label> <br>
                <span class="fw-bold">
                    {{ $jobapplication->declaration_date ? $jobapplication->declaration_date->format('d/m/Y') : '' }}</span>
            </div>
            <div class="col-md-4">
                <label for="" class="form-label ">Place :</label> <br />
                <span class="fw-bold">{{ $jobapplication->place }} </span>
            </div>
            <div class="col-md-4">

                <img src="{{ url('storage/public/' . $jobapplication->signature_path) }}" alt="" width="75">
            </div>
        </div>
    </x-card>
@else
    @if (!$jobapplication->jobpostings->jobPostingLastDate->isPast())


        <form action={{ route('jobapplication.update', $jobapplication) }} method="POST" enctype='multipart/form-data'>
            @csrf @method('PATCH')
            <x-card>

                <div class="d-flex align-items-center">
                    <div class="border rounded-circle d-flex justify-center align-items-center me-3 p-3 bg-light">
                        <svg fill="#5B626F" width="30" viewBox="0 0 512 512">
                            <g>
                                <path
                                    d="M392.943,112.864H332.66c-2.808-10.057-6.617-19.767-11.273-28.769h71.557c23.185,0,42.047-18.863,42.047-42.047 S416.129,0,392.944,0H119.056C95.871,0,77.009,18.863,77.009,42.047s18.863,42.047,42.047,42.047h64.51 c22.431,0,43.529,10.96,56.823,28.769H119.056c-23.185,0-42.047,18.863-42.047,42.047c0,23.185,18.863,42.047,42.047,42.047 h121.447c-13.279,17.809-34.419,28.769-56.936,28.769h-64.51c-23.185,0-42.047,18.739-42.047,41.771 c0,11.666,4.714,22.49,13.281,30.523l181.148,200.173c7.937,8.773,19.305,13.806,31.191,13.806 c10.427,0,20.441-3.865,28.198-10.884c8.329-7.535,13.225-17.863,13.786-29.082c0.561-11.221-3.279-21.986-10.818-30.321 L211.667,306.963c44.675-8.307,83.878-36.25,106.933-76.969c2.258-3.988,0.855-9.052-3.133-11.311 c-3.988-2.257-9.052-0.855-11.311,3.133c-23.07,40.742-64.156,67.178-109.909,70.716c-3.158,0.245-5.901,2.264-7.072,5.206 s-0.564,6.294,1.562,8.641l132.753,146.475c4.561,5.041,6.885,11.557,6.545,18.35c-0.34,6.792-3.303,13.043-8.345,17.604 c-4.7,4.252-10.76,6.594-17.062,6.594c-7.204,0-14.087-3.041-18.884-8.343L102.357,286.619c-0.169-0.187-0.346-0.366-0.531-0.537 c-5.3-4.88-8.219-11.48-8.219-18.584c0-13.88,11.417-25.173,25.45-25.173h64.51c33.529,0,64.57-19.664,79.081-50.094 c1.226-2.57,1.047-5.591-0.472-8c-1.52-2.409-4.17-3.869-7.019-3.869h-136.1c-14.033,0-25.45-11.416-25.45-25.45 s11.417-25.45,25.45-25.45h136.002c2.85,0,5.502-1.463,7.021-3.875c1.52-2.412,1.695-5.434,0.465-8.006 c-14.557-30.426-45.558-50.085-78.978-50.085h-64.51c-14.033,0-25.45-11.416-25.45-25.45s11.417-25.45,25.45-25.45h273.887 c14.033,0,25.45,11.416,25.45,25.45s-11.417,25.45-25.45,25.45h-86.046c-3.06,0-5.871,1.683-7.315,4.381 c-1.445,2.698-1.288,5.971,0.407,8.517c8.255,12.398,14.531,27.148,18.151,42.655c0.876,3.755,4.225,6.412,8.082,6.412h66.721 c14.033,0,25.45,11.416,25.45,25.45c0,14.034-11.417,25.45-25.45,25.45h-66.97c-4.583,0-8.299,3.715-8.299,8.299 c0,4.584,3.716,8.299,8.299,8.299h66.97c23.185,0,42.047-18.863,42.047-42.047C434.99,131.726,416.128,112.864,392.943,112.864z">
                                </path>
                            </g>
                        </svg>
                    </div>

                    <h3>Fee Details</h3>
                    <div class="ms-3"> <x-required-label /> </div>
                </div>

                <div class="row mt-3 mb-3 g-3 border-bottom pb-3">

                    <div class="col-md-4">

                        <label for="mode_of_payment" class="form-label">Payment Fee</label>

                        <input type="text" class="form-control  @error('mode_of_payment') is-invalid @enderror"
                            id="mode_of_payment" name="mode_of_payment" value="₹ 300 /-" disabled>
                        @error('mode_of_payment')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="fee_details" class="form-label">Transaction ID <span
                                style="color:red">*</span></label>
                        <input type="text" class="form-control  @error('fee_details') is-invalid @enderror"
                            id="fee_details" name="fee_details" placeholder="Trans. ID"
                            value="{{ old('fee_details', $paymentdetail->fee_details ?? '') }}"
                            @if ($jobapplication->candidates->personaldetails->gender == 'female') disabled
                        @elseif(in_array($jobapplication->candidates->personaldetails->reservationcategory->code, ['SC', 'ST'])) 
                        disabled @endif>
                        @error('fee_details')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    @if ($jobapplication->candidates->personaldetails->gender == 'female')
                    @elseif(in_array($jobapplication->candidates->personaldetails->reservationcategory->code, ['SC', 'ST']))
                    @else
                        <div class="col-md-4">
                            <label for="payment_proof" class="form-label">Payment Proof
                                <span style="color:red">*</span></label>
                            <input type="file" name="payment_proof" id="payment_proof" class="filepond" />

                            @error('payment_proof')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    @endif


                    <div class="col-12">
                        <p class="" style="line-height:1.8">SC/ST/PwD/Ex-SM/Female candidates are exempted
                            from
                            payment of application fees. Payment of Processing Fee of Rs.300/- (Rupees Three Hundred
                            only) through <a href="https://www.onlinesbi.sbi/sbicollect/icollecthome.htm"
                                target="_blank">SBI Collect</a> (PSU- Armoured
                            Vehicles Nigam Limited- Miscellaneous) or by means of a Demand Draft drawn in favour of
                            Ordnance Factory
                            Medak, payable at Sanga Reddy.</p>
                    </div>
                </div>

                <div class="d-flex align-items-center">
                    <div class="border rounded-circle d-flex justify-center align-items-center me-3 p-3 bg-light">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="30">
                            <g>
                                <path
                                    d="M2 12C2 16.714 2 19.0711 3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12V10.5M13.5 2H12C7.28595 2 4.92893 2 3.46447 3.46447C2.49073 4.43821 2.16444 5.80655 2.0551 8"
                                    stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                                <path
                                    d="M16.652 3.45506L17.3009 2.80624C18.3759 1.73125 20.1188 1.73125 21.1938 2.80624C22.2687 3.88124 22.2687 5.62415 21.1938 6.69914L20.5449 7.34795M16.652 3.45506C16.652 3.45506 16.7331 4.83379 17.9497 6.05032C19.1662 7.26685 20.5449 7.34795 20.5449 7.34795M16.652 3.45506L10.6872 9.41993C10.2832 9.82394 10.0812 10.0259 9.90743 10.2487C9.70249 10.5114 9.52679 10.7957 9.38344 11.0965C9.26191 11.3515 9.17157 11.6225 8.99089 12.1646L8.41242 13.9M20.5449 7.34795L17.5625 10.3304M14.5801 13.3128C14.1761 13.7168 13.9741 13.9188 13.7513 14.0926C13.4886 14.2975 13.2043 14.4732 12.9035 14.6166C12.6485 14.7381 12.3775 14.8284 11.8354 15.0091L10.1 15.5876M10.1 15.5876L8.97709 15.9619C8.71035 16.0508 8.41626 15.9814 8.21744 15.7826C8.01862 15.5837 7.9492 15.2897 8.03811 15.0229L8.41242 13.9M10.1 15.5876L8.41242 13.9"
                                    stroke="#5B626F" stroke-width="1.5" stroke-linecap="round"></path>
                            </g>
                        </svg>
                    </div>

                    <h3>Declaration</h3>
                    <div class="ms-3"> <x-required-label /> </div>
                </div>



                <p class="text-justify">I, the undersigned, certify that to the best of my knowledge and belief,
                    this
                    CV correctly describes myself, my qualifications, and my experience. I understand that any
                    wilful
                    misstatement described herein may lead to my disqualification or dismissal, if engaged.

                </p>




                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="" class="form-label">Date</label>
                        <input type="date" class="form-control" name="declaration_date" />
                    </div>
                    <div class="col-md-4">
                        <label for="" class="form-label">Place</label>
                        <input type="text" class="form-control" name="place" />
                    </div>
                    <div class="col-md-4">
                        @if ($jobapplication->signature_path)
                            <img src="{{ url('storage/public/' . $jobapplication->signature_path) }}" alt=""
                                width="150">
                        @else
                            <label for="" class="form-label">Signature</label>
                            <input type="file" name="declarationSignature" id="signature" class="filepond" />
                        @endif
                    </div>
                </div>


                <input type="hidden" name="isSubmitted" value="true" />


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary rounded-3 text-center" data-bs-toggle="modal"
                    data-bs-target="#submitApplication">
                    Submit Application
                </button>

                <!-- Modal -->
                <div class="modal fade" id="submitApplication" style="z-index: 99999999999" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                {{-- @if (auth()->guard('applicants')->user()->personaldetails->photo_path)
                                <div class="alert alert-success">
                                    Passport Photo Affixed
                                </div>
                            @else
                                <div class="alert alert-danger">
                                    Please Upload Photo
                                </div>
                            @endif

                            @if (count($jobapplication->experiencedetails) > 0)
                                <div class="alert alert-danger">
                                    Experience Details Uploaded
                                </div>
                            @else
                                <div class="alert alert-success">
                                    Upload atleast 1 experience
                                </div>
                            @endif --}}

                                Please make sure all the required details are filled in the application. Any data
                                mismatch
                                or insufficient data will lead to application rejection.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger rounded-3"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success rounded-3 text-center" value="true"
                                    name="isSubmitted">Submit Application</button>

                            </div>
                        </div>
                    </div>
                </div>




            </x-card>
        </form>
    @endif
@endif
