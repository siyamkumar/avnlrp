<?php

namespace App\Models\Applicants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HigherSecondaryEducationDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'school_name',
        'school_board',
        'year_of_passing',
        'score',
        'marksheet_path',
    ];

    protected $dates = [
        'year_of_passing' => 'datetime:Y'
    ];


}
