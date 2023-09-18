<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalDetailsFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (auth()->guard('applicants')->user())
            return true;
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'candidate_id' => 'required',
            'fatherName' => 'required|string',
            'gender' => 'required',
            'dob' => 'required',
            'category' => 'required',
            'aadhaarNo'  => 'required|digits:12',
            'pan'  => 'required|string|min:10|max:10',
            'address_line_1' => 'required',
            'address_line_2' => 'required',
            'city' => 'required',
            'region_state_id' => 'required',
            'pin_code' => 'required|digits:6|integer',
            'photo_path' => 'required|max:0.05',
            'sign_path' => 'required|max:0.02',
        ];
    }

    protected function prepareForValidation()
    {
      
       $this->merge([
            'candidate_id' => auth()->guard('applicants')->user()->id,
        ]);
    }
}
