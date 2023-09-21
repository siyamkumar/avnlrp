<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'reservation_category_id' => 'required',
            'aadhaarNo'  => [['required', Rule::unique('aadhaarNo')->ignore($this->aahaarNo)], Rule::unique('aadhaarNo')->ignore($this->aadhaarNo)],
            'pan'  => 'required|string|min:10|max:10',
            'address_line_1' => 'required',
            'address_line_2' => 'required',
            'city' => 'required',
            'region_state_id' => 'required',
            'pin_code' => 'required|digits:6|integer',
            'photo_path' => 'required|max:50',
            //'sign_path' => 'required|max:20',
        ];
    }

    protected function prepareForValidation()
    {
      
       $this->merge([
            'candidate_id' => auth()->guard('applicants')->user()->id,
        ]);
    }

    public function messages(): array
{
    return [
        'pan.max' => 'Enter a valid PAN',
        'pan.min' => 'Enter a valid PAN',
        'pin_code.digits' => 'Enter a valid pincode',
    ];
}

}
