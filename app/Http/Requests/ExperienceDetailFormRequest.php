<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceDetailFormRequest extends FormRequest
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
            'companyName' => 'required',
            'postName' => 'required',
            'periodFrom' => 'required',
            'periodTo' => 'required|after:periodFrom',
            'payScale' => 'required|integer',
            'ctc' => 'required',
           'experience_path' => 'required|max:50',
            'jobsSummary' => 'required',
            'jobType' => 'required',
        ];
    }
          
    
    protected function prepareForValidation()
    {

        $this->merge([
            'candidate_id' => auth()->guard('applicants')->user()->id,
        ]);
    }
}
