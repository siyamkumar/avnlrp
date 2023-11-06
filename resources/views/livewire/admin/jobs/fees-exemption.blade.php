 <x-card>
     <h4>Add Fees Exemption</h4>

     <form wire:submit='addFeesExemption'>

         <div class="mb-3 row">
             <div class="col-md-4">
                 <label for="reservation_category_id" class="form-label">Reservation Category</label>
                 <select class="form-select @error('reservation_category_id') is-invalid @enderror"
                     id="reservation_category_id" wire:model='reservation_category_id'>
                     <option value="">Select Category</option>
                     @foreach ($reservationcategories as $category)
                         <option value="{{ $category->id }}" @if (in_array(
                                 $category->id,
                                 $jobposting->feesexemptions()->pluck('reservation_category_id')->toArray())) disabled @endif>
                             {{ $category->name }}</option>
                     @endforeach
                 </select>
             </div>
             {{-- {{$jobposting->feesexemptions()->pluck('reservation_category_id')}} --}}

             <div class="col-md-4">
                 <label for="vacancy" class="form-label">Fees to be Exempted</label>

                 <input type="number" class="form-control mb-2" placeholder="" value=""
                     wire:model ='exemptedfees' min="1" max={{ $jobposting->fees }} />


             </div>


             <div class="col-md-4">
                 <label class="form-label">Max Fees can be exempted : <b>{{ $jobposting->fees }}</b></label><br />
                 <button class="btn btn-primary" data-dismiss="modal">Add Exemption</button>
                 <div wire:loading wire:target="addVacancy" data-bs-dismiss="modal">
                     <div class="spinner-border text-primary" role="status">
                         <span class="visually-hidden">Loading...</span>
                     </div>
                 </div>
             </div>
         </div>
     </form>

     @if (count($jobposting->feesexemptions) > 0)
         <table class="table">
             <tr>
                 <th>Category</th>
                 <th>Fees Exempted</th>
                 <th>Fees to be Paid</th>
             </tr>
             @foreach ($jobposting->feesexemptions as $feesexemption)
                 <tr>
                     <td>{{ $feesexemption->reservationcategories->code ?? '' }}
                         [{{ $feesexemption->reservationcategories->name ?? '' }}]</td>
                     <td>{{ $feesexemption->exemptedfees ?? '' }}</td>
                     <td>{{ $jobposting->fees - $feesexemption->exemptedfees ?? 0 }}</td>

                     <td>
                         <button class="btn btn-sm btn-danger" wire:click="deleteVacancy({{ $feesexemption }})"> Delete
                             </div>
                     </td>
                 </tr>
             @endforeach

         </table>

     @endif




 </x-card>
