<?php

namespace App\Models\JobPosting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationCriteria extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_posting_id', 'desired_education', 'min_qualification'
    ];

    protected $casts = [ 
        'min_qualification' => 'array'
    ];

}
