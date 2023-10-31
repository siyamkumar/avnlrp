<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class LocationUnitFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'unit_code' => [Rule::unique('location_units', 'unit_code')->ignore($this->locationunit), 'required','sometimes' ],
            'unit_name' => 'required',
            'address' => 'required',
            'about' => 'required|max:600',
        ];
    }
}
