<x-candidate-layout>
    <x-slot name="candidateheader">
        <h2 class="">
            {{ __('Experience Details') }}
            {{-- <small class="text-muted fw-light"> | Post Graduation Details </small> --}}
        </h2>
    </x-slot>



    <form method="POST" {{-- action="{{ route('') }}" --}}>
        @csrf

        <div class="row g-3 pb-3 border-bottom">
            <div class="col-md-6">
                <label for="expCompnayName" class="form-label"> Name of the
                    Company </label>
                <input type="text" readoly class="form-control" id="companyName" name="companyName">

            </div>

            <div class="col-md-6">
                <label for="expPost" class="form-label"> Post Held</label>
                <input type="text" class="form-control" id="postName" name="postName">
            </div>

            <div class="col-md-6">
                <label for="expPeriod" class="form-label">Period of Employment</label>

                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <label for="periodFrom" class="col-md-4 col-form-label">From</label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" placeholder="From Date" aria-label="FromDate"
                                    id="periodFrom" name="periodFrom">
                            </div>
                        </div>


                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <label for="periodFrom" class="col-md-4 col-form-label">To</label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" placeholder="To Date" aria-label="ToDate"
                                    id="periodTo" name="periodTo">
                            </div>
                        </div>
                    </div>

                </div>


            </div>

            <div class="col-md-6">
                <label for="payScale" class="form-label"> Pay Scale(PSUs/Govt.Depts.)</label>
                <input type="text" class="form-control" id="payScale" name="payScale">
            </div>

            <div class="col-md-6">
                <label for="ctc" class="form-label"> CTC</label>
                <input type="text" class="form-control" id="ctc" name="ctc">

                <label for="experienceFile" class=" form-label">Experience Cerificate</label>
                <input class="form-control" type="file" id="experienceFile" name="experienceFile">

            </div>



            <div class="col-md-6">
                <label for="staticEmail" class="form-label"> Jobs Summary</label>
                <textarea class="form-control" id="jobsSummary" rows="3" name="jobsSummary"></textarea>
            </div>
        </div>


        <div class="mt-3">
            <button type="submit" class="btn btn-primary"> Save & Continue </button>
        </div>





    </form>
</x-candidate-layout>
