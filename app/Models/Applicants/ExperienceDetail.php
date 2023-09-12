<?php

namespace App\Models\Applicants;

use App\Models\Candidate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceDetail extends Model
{
    use HasFactory;

    protected $fillable=[

        'candidate_id',
        'companyName',
        'postName',
        'periodFrom',
        'periodTo',
        'payScale' ,
        'ctc' ,
        'experience_path' ,
        'jobsSummary' ,
    ];

    protected $casts = [
        'periodFrom' =>'date',
        'periodTo' =>'date'
    ];

    public function candidates(){
        return $this->belongsTo(Candidate::class);
    }
}