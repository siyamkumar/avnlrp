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
        'submitted_at',
        'file_name',
        'file_type',
        'file_size',
        'fees_paid',
        'declaration_date',
        'isShortlisted',
        'place',
        'signature_path',
        'shortlist_remarks',
        'reject_remarks',

    ];

    protected $casts = [
        'submitted_at' => 'date',
        'declaration_date' => 'date'
    ];

    public function jobpostings(){
        return $this->belongsTo(JobPosting::class, 'job_posting_id');
    }
    public function candidates(){
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }

     public function secondaryeducationdetails(){
        return $this->hasOne(SecondaryEducationDetail::class);
    }

    public function highersecondaryeducationdetails(){
        return $this->hasOne(HigherSecondaryEducationDetail::class);
    }

    public function graduationeducationdetails(){
        return $this->hasMany(GraduationEducationDetail::class);
    }

    public function postgraduationeducationdetails(){
        return $this->hasMany(PostGraduationEducationDetail::class);
    }

    public function experiencedetails(){
        return $this->hasMany(ExperienceDetail::class, 'application_reference_number_id');
    }
}
