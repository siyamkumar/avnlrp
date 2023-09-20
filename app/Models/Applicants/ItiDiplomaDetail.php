<?php

namespace App\Models\applicants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItiDiplomaDetail extends Model
{
    use HasFactory;
    protected $fillable = [
      
        'candidate_id',
        'courseName',
        'collegeName',
        'universityName',
        'year_of_passing',
        'score',
        'marksheet_path',
        'file_name',
        'file_type',
        'file_size'
    ];
}
