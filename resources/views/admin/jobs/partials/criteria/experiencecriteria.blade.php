<x-card>
    <form action="{{ route('jobpostings.experiencecriteria.store', $jobposting) }}" method="POST">
        @csrf
        <h4 class="border-bottom pb-3 mb-3">Experience</h4>
        <div class="row ">
            <div class="col-md-10">
                <div class="row mb-3">

                    <div class="col-md-6">
                        <div class="row">
                            <label for="minExp" class="col-sm-4 col-form-label">Minimum
                                Exp.</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="minExp" name="minExp"
                                    placeholder="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <label for="maxExp" class="col-sm-4 col-form-label">Maximum
                                Exp.</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="maxExp" name="maxExp" placeholder="">
                            </div>

                        </div>
                    </div>




                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-floating">

                            <input type="text" class="form-control" id="desiredExperience" name="desiredExperience" placeholder="" />

                            <label for="desiredExperience">Desired Experience</label>
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
