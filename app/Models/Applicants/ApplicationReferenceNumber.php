<?php

namespace App\Models\Applicants;

use App\Models\Candidate;
use App\Models\JobPosting;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationReferenceNumber extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'job_posting_id',
        'arn',
        'mode_of_payment',
        'fee_details',
        'payment_proof',
        'status',
        'isSubmitted',
    ];

    public function jobpostings(){
        return $this->belongsTo(JobPosting::class, 'job_posting_id');
    }
    public function candidates(){
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }
}
