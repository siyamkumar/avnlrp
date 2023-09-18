<?php

namespace App\Models;

use App\Models\Applicants\ApplicationReferenceNumber;
use App\Models\JobPosting\AgeCriteria;
use App\Models\JobPosting\EducationCriteria;
use App\Models\JobPosting\ReservationAgeRelaxation;
use App\Models\JobPosting\ReservationVacancyRelaxation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
    use HasFactory;
    protected $fillable = [
        'jobPostingDate',
        'jobPostingLastDate',
        'jobAdvertismentNo',
        'jobTitle',
        'category',
        'location_unit_id',
        'vacancy',
        'status',        
        'tenure',
        'renumeration',
        'summary',
        'user_id',
        'isContract'
    ];


    protected $casts = [
        'jobPostingDate' => 'date',
        'jobPostingLastDate' => 'date',
        'isContract' => 'boolean'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function agecriteria(){
        return $this->hasOne(AgeCriteria::class);
    }

    public function educationcriteria(){
        return $this->hasOne(EducationCriteria::class, 'job_posting_id');
    }

    public function locationunit(){
        return $this->belongsTo(LocationUnit::class, 'location_unit_id');
    }

    public function reservationagerelaxations(){
        return $this->hasMany(ReservationAgeRelaxation::class, 'job_posting_id');
    }

    public function reservationvacancyrelaxations(){
        return $this->hasMany(ReservationVacancyRelaxation::class, 'job_posting_id');
    }

    public function arns(){
        return $this->hasMany(ApplicationReferenceNumber::class, 'job_posting_id');
    }
}
