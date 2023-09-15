<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItiDiplomaFormRequest extends FormRequest
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
            'courseName' => 'required',
            'collegeName' => 'required',
            'universityName' => 'required',
            'year_of_passing' => 'required',
            'score' => 'required',
            'marksheet_path'=>'required',
        ];
    }
    protected function prepareForValidation()
    {

        $this->merge([
            'candidate_id'=> auth()->guard('applicants')->user()->id,
        ]);
    }
}
