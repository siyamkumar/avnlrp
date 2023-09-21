<?php

namespace App\Models\JobPosting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\JobPosting;

class JobRequirement extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_posting_id',
        // 'reservation_category_id',
        // 'upper_relaxation',
        // 'lower_relaxation'
    ];
    public function jobpostings(){
        return $this->belongsTo(JobPosting::class, 'job_posting_id');
    }
}
