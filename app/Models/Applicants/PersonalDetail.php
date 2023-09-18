<?php

namespace App\Models\Applicants;

use App\Models\ReservationCategory;
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
        'reservation_category_id',
        'aadhaarNo',
        'pan',
        'address_line_1',
        'address_line_2',
        'city',
        'region_state_id',
        'pin_code',
    ];

    protected $casts = [
        'dob' => 'date'
    ];  

    public function reservationcategory(){
        return $this->belongsTo(ReservationCategory::class, 'reservation_category_id');
    }
    
}
