<button type="button" class="btn btn-primary" data-bs-target="#agerelaxationmodal" data-bs-toggle="modal">Add
    Relaxation</button>

<div class="modal fade" id="agerelaxationmodal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('jobpostings.agerelaxation.store', $jobposting) }}" method="POST" id="agerelaxationform">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Age Relaxtion</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">



                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-md-5 col-form-label">Reservation Category</label>
                        <div class="col-md-7">
                            <select class="form-select @error('reservation_category_id') is-invalid @enderror"
                                name="reservation_category_id">
                                <option value="">Select Category</option>
                                @foreach ($reservationcategories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('reservation_category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label for="lower_relaxation" class="col-md-5 col-form-label">Lower Relaxation</label>
                        <div class="col-md-7">
                            <input type="number" class="form-control" id="lower_relaxation" name="lower_relaxation"
                                placeholder="" value="" />
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="upper_relaxation" class="col-md-5 col-form-label">Upper Relaxation</label>
                        <div class="col-md-7">
                            <input type="number" class="form-control" id="upper_relaxation" name="upper_relaxation"
                                placeholder="" value="" />
                        </div>
                    </div>




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="agerelaxationform">Add Relaxation</button>
                </div>
            </form>
        </div>
    </div>
</div>
