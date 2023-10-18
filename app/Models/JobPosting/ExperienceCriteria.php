<?php

namespace App\Models\JobPosting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceCriteria extends Model
{
   
    use HasFactory;
    protected $fillable = [
        'job_posting_id',
        'minExp',
        'maxExp',
        'desiredExperience'
    ];
}
