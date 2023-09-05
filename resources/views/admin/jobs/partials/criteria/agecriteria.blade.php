<x-card>

    @if ($jobposting->agecriteria)
        <form action="{{ route('jobpostings.agecriteria.update', [$jobposting, $jobposting->agecriteria]) }}"
            method="POST">
            @csrf @method('PUT')

            <h4 class="border-bottom pb-3 mb-3">Age</h4>
            <div class="row ">
                <div class="col-md-10">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="minAge" class="col-sm-4 col-form-label">Minimum
                                    Age</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="minAge" name="minAge"
                                        placeholder="" value="{{ $jobposting->agecriteria->minAge }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="maxAge" class="col-sm-4 col-form-label">Maximum
                                    Age</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="maxAge" name="maxAge"
                                        placeholder="" value="{{ $jobposting->agecriteria->maxAge }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </div>
        </form>
    @else
        <form action="{{ route('jobpostings.agecriteria.store', $jobposting) }}" method="POST">
            @csrf
            <h4 class="border-bottom pb-3 mb-3">Age</h4>
            <div class="row ">
                <div class="col-md-10">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="minAge" class="col-sm-4 col-form-label">Minimum
                                    Age</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="minAge" name="minAge"
                                        placeholder="" value="" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="maxAge" class="col-sm-4 col-form-label">Maximum
                                    Age</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="maxAge" name="maxAge"
                                        placeholder="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    @endif




</x-card>
