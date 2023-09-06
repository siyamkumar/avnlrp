<?php

namespace App\Models;

use App\Models\Applicants\HigherSecondaryEducationDetail;
use App\Models\Applicants\PersonalDetail;
use App\Models\Applicants\SecondaryEducationDetail;
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
}
