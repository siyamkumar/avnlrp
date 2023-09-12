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
<<<<<<< HEAD
        return true;
    return false;
=======
            return true;
        return false;
>>>>>>> 73680dbf1aa8a9d5fe936e147f406264a81ad0e3
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
            'periodTo' => 'required',
            'payScale' => 'required|integer',
            'ctc' => 'required',
<<<<<<< HEAD
           'experience_path' => 'required',
            'jobsSummary' => 'required',
        ];
    }
=======
            //'experience_path' => 'required',
            'jobsSummary' => 'required',
        ];
    }

>>>>>>> 73680dbf1aa8a9d5fe936e147f406264a81ad0e3
    protected function prepareForValidation()
    {

        $this->merge([
            'candidate_id' => auth()->guard('applicants')->user()->id,
        ]);
    }
<<<<<<< HEAD
=======
    
>>>>>>> 73680dbf1aa8a9d5fe936e147f406264a81ad0e3
}
