<x-card>

<h4>Vacancy</h4>

<table class="table">
    <tr>
        <th>Category</th>
        <th>Vacancy</th>
    </tr>
    @foreach ($jobposting->reservationvacancyrelaxations as $vacancy)
    
    <tr>
        <td>{{$vacancy->reservationcategories->code }} [{{ $vacancy->reservationcategories->name }}]</td>
        <td>{{ $vacancy->vacancy }}</td>
    </tr>

@endforeach 

</table>

    

<button type="button" class="btn btn-primary" data-bs-target="#vacancymodal" data-bs-toggle="modal">Add
    Relaxation</button>

<div class="modal fade" id="vacancymodal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('jobpostings.vacancy.store', $jobposting) }}" method="POST" id="agerelaxationform">
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
                        <label for="vacancy" class="col-md-5 col-form-label">No of Vacancy</label>
                        <div class="col-md-7">
                            <input type="number" class="form-control" id="vacancy" name="vacancy"
                                placeholder="" value="" />
                        </div>
                    </div>





                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="agerelaxationform">Add Vacancy</button>
                </div>
            </form>
        </div>
    </div>
</div>


    


</x-card>
