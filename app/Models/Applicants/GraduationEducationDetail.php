<?php

namespace App\Models\Applicants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraduationEducationDetail extends Model
{
    use HasFactory;

    protected $fillable = [
      
        'candidate_id',
        'course_name','college_name',
        'university_name',
        'year_of_passing',
        'score',
        'marksheet_path',
        'file_name',
        'file_type',
        'file_size',
        'application_reference_number_id'
    ];
}
