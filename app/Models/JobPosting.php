<?php

namespace App\Models;

use App\Models\JobPosting\AgeCriteria;
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

    public function locationunit(){
        return $this->belongsTo(LocationUnit::class, 'location_unit_id');
    }
}
