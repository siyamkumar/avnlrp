<?php

namespace App\Models\JobPosting;

use App\Models\JobPosting;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgeCriteria extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_posting_id',
        'minAge',
        'maxAge'
    ];

    public function jobposting(){
        return $this->belongsTo(JobPosting::class);
    }
}
