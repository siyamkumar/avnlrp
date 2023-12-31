<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HigherSecondaryEducationFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        if (auth()->guard('applicants')->user())
            return true;
        return false;
    }

    
    public function rules(): array
    {
        return [
            'candidate_id' => 'required',
            'school_name' => 'required',
            'school_board' => 'required',
            'year_of_passing' => 'required|numeric|digits:4',
            'score' => 'required|numeric|between:1,99.99',
            'marksheet_path' => 'mimes:png,jpg,jpeg,csv,txt,pdf|max:50',
        ];
    }
    protected function prepareForValidation()
    {

        $this->merge([
            'candidate_id' => auth()->guard('applicants')->user()->id,
        ]);
    }
}
