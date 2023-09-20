<?php

namespace App\Models\Applicants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HigherSecondaryEducationDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'school_name',
        'school_board',
        'year_of_passing',
        'score',
        'marksheet_path' => 'mimes:png,jpg,jpeg,csv,txt,pdf|max:50',
        'file_name',
        'file_type',
        'file_size'
    ];

    // protected $dates = [
    //     'year_of_passing' => 'datetime:Y'
    // ];
    // protected function prepareForValidation()
    // {
      
    //    $this->merge([
    //         'candidate_id' => auth()->guard('applicants')->user()->id,
    //     ]);
    // }

}
