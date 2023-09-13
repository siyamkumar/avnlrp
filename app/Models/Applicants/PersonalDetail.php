<?php

namespace App\Models\Applicants;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'candidate_id',
        'fatherName',
        'gender',
        'dob',
        'category',
        'aadhaarNo',
        'pan',
        'address_line_1',
        'address_line_2',
        'city',
        'region_state_id',
        'pin_code',
    ];

    
}
