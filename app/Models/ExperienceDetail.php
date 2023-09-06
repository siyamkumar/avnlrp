<?php

namespace App\Models;

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
        //'experience_path' ,
        'jobsSummary' ,
    ];
}
