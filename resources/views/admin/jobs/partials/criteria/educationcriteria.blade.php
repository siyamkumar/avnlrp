<x-card>
    <form action="{{route('jobpostings.educationcriteria.store', $jobposting)}}" method="POST">
        @csrf
        <h4 class="border-bottom pb-3 mb-3">Education</h4>
        <div class="row">
            <div class="col-md-10">
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Minimum
                        Education</label>

                    <div class="col-sm-8">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="minEducation10"
                                name="reqEducation[]" value="10th">
                            <label class="form-check-label"
                                for="minEducation10">10<sup>th</sup></label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="minEducation12"
                                name="reqEducation[]" value="12th">
                            <label class="form-check-label"
                                for="minEducation12">12<sup>th</sup></label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"
                                id="minEducationIti" name="reqEducation[]" value="ITI">
                            <label class="form-check-label"
                                for="minEducationIti">ITI</sup></label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox"
                                id="minEducationDiploma" name="reqEducation[]" value="Diploma">
                            <label class="form-check-label"
                                for="minEducationDiploma">Diploma</sup></label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="minEducationUg" name="reqEducation[]" value="UG">
                            <label class="form-check-label" for="minEducationUg">UG</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="minEducationPg" name="reqEducation[]" value="PG">
                            <label class="form-check-label" for="minEducationPg">PG</sup></label>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-floating">

                            <input type="text" class="form-control" id="desiredQualification"
                                placeholder="" name="desiredQualification"/>
                            <label for="desiredQualification">Desired Qualification</label>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-2 align-self-end">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </form>



</x-card>
