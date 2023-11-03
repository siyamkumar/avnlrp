<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Applicants\PersonalDetail;
use App\Models\JobPosting;
use Illuminate\Database\Eloquent\Model;


class RegionState extends Model
{
    use HasFactory;
    
    public function jobpostings()
    {
        return $this->hasMany(JobPosting::class);
    }
    public function personaldetails(){
        return $this->hasMany(PersonalDetail::class);
    }

   
}
