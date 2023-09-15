<?php

namespace App\Models;

use App\Models\Applicants\ApplicationReferenceNumber;
use App\Models\Applicants\GraduationEducationDetail;
use App\Models\Applicants\HigherSecondaryEducationDetail;
use App\Models\Applicants\PersonalDetail;
use App\Models\Applicants\PostGraduationEducationDetail;
use App\Models\Applicants\SecondaryEducationDetail;
use App\Models\Applicants\ItiDiplomaDetail;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;

class Candidate extends Model implements AuthorizableContract, AuthenticatableContract
{
    use HasFactory, SoftDeletes, Authenticatable, Authorizable;
    protected $fillable = [
        // 'salutation',
        'fullname', 'email', 
        'phone_no'
    ];

    public function personaldetails(){
        return $this->hasOne(PersonalDetail::class);
    }

    public function secondaryeducationdetails(){
        return $this->hasOne(SecondaryEducationDetail::class);
    }

    public function highersecondaryeducationdetails(){
        return $this->hasOne(HigherSecondaryEducationDetail::class);
    }

    public function graduationeducationdetails(){
        return $this->hasOne(GraduationEducationDetail::class);
    }

    public function postgraduationeducationdetails(){
        return $this->hasOne(PostGraduationEducationDetail::class);
    }
    public function ItiDiplomaDetails(){
        return $this->hasOne(ItiDiplomaDetail::class);
    }
    public function jobapplications(){
        return $this->hasMany(ApplicationReferenceNumber::class, 'candidate_id', 'id');
    }
}
