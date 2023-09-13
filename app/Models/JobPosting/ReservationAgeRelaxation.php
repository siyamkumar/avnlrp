<?php

namespace App\Models\JobPosting;

use App\Models\ReservationCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationAgeRelaxation extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_posting_id',
        'reservation_category_id',
        'upper_relaxation',
        'lower_relaxation'
    ];

    public function reservationcategories(){
        return $this->belongsTo(ReservationCategory::class, 'reservation_category_id');
    }
}
