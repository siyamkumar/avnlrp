 <x-card>
     <h4>Add Vacancy</h4>

     <form wire:submit='addVacancy'>

         <div class="mb-3 row">
             <div class="col-md-4">
                 <label for="reservation_category_id" class="form-label">Reservation Category</label>
                 <select class="form-select @error('reservation_category_id') is-invalid @enderror"
                     id="reservation_category_id" wire:model='reservation_category_id' @if(!$canAdd) disabled @endif>
                     <option value="">Select Category</option>
                     @foreach ($reservationcategories as $category)
                         <option value="{{ $category->id }}">{{ $category->name }}</option>
                     @endforeach
                 </select>
             </div>

             <div class="col-md-4">
                 <label for="vacancy" class="form-label">No of Vacancy</label>

                 <input type="number" class="form-control mb-2" id="vacancy" wire:model="vacancyalloted"
                     placeholder="" value="" min="1" max={{ $vacancyleft }} @if(!$canAdd) disabled @endif />


             </div>


             <div class="col-md-4">
                 <label class="form-label">Total Vacancy Left : <b>{{ $vacancyleft }}</b></label><br/>
                 <button class="btn btn-primary" data-dismiss="modal" @if(!$canAdd) disabled @endif>Add Vacancy</button>
                 <div wire:loading wire:target="addVacancy" data-bs-dismiss="modal">
                     <div class="spinner-border text-primary" role="status">
                         <span class="visually-hidden">Loading...</span>
                     </div>
                 </div>
             </div>
         </div>
     </form>

     <table class="">
         <tr>
             <th>Category</th>
             <th>Vacancy</th>
         </tr>
         @foreach ($jobposting->reservationvacancyrelaxations as $vacancy)
             <tr>
                 <td>{{ $vacancy->reservationcategories->code }}
                     [{{ $vacancy->reservationcategories->name }}]</td>
                 <td>{{ $vacancy->vacancy }}</td>
                 <td>
                    <button class="btn btn-sm btn-danger" wire:click="deleteVacancy({{$vacancy}})"> Delete </div>
                 </td>
             </tr>
         @endforeach

     </table>




 </x-card>
