<x-card>

    @if ($jobposting->agecriteria)
        <form action="{{ route('jobpostings.agecriteria.update', [$jobposting, $jobposting->agecriteria]) }}"
            method="POST">
            @csrf @method('PUT')

            <h4 class="border-bottom pb-3 mb-3">Age</h4>
            <div class="row ">
                <div class="col-md-9">
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
                                <label for="maxAge" class="col-sm-4 col-form-label">Maximum Age</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="maxAge" name="maxAge"
                                        placeholder="" value="{{ $jobposting->agecriteria->maxAge }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
        </form>
        @include('admin.jobs.partials.criteria.agerelaxation')
        </div>
        </div>

        @if ($jobposting->reservationagerelaxations)
            <div class="border-top pt-3">
                <h4 class="pb-3 mb-3">Relaxation</h4>
                <table class="table table-sm">
                    <tr>
                        <th>Category</th>
                        <th>Lower Relaxation</th>
                        <th>Upper Relaxation</th>
                    </tr>
                    @foreach ($jobposting->reservationagerelaxations as $agerelaxation)
                        <tr>
                            <td>{{ $agerelaxation->reservationcategories->code }} [{{ $agerelaxation->reservationcategories->name }}]</td>
                            <td>{{ $agerelaxation->lower_relaxation ?? ''}} Years</td>
                            <td>{{ $agerelaxation->upper_relaxation ?? ''}} Years</td>
                        </tr>
                        
                    @endforeach
                </table>



            </div>
        @endif
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
