<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class JobPostingFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        
        return [
            'jobPostingDate' => 'sometimes|required|date',
            'jobPostingLastDate'=>'sometimes|date',
            'jobAdvertismentNo' => 'sometimes|required|string',
            'location_unit_id' => 'sometimes|required',
            'jobTitle' => 'sometimes|required',
            'reservation_category_id' => '',
            'vacancy' => 'sometimes|required|integer|min:1',
            'status' => 'sometimes|string',        
            'tenure' => 'sometimes|required|integer|min:1|max:50',
            'renumeration' => 'sometimes|required|integer|min:1',
            'user_id' => 'exists:App\Models\User,id',
            'summary' => 'sometimes|string',
        ];
    }

    protected function prepareForValidation(){
         $this->merge([
            'user_id' => auth()->user()->id,
        ]);
    }
}
