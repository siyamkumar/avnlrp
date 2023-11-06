<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeesExemption extends Model
{
    use HasFactory;
    protected $fillable= [
        'job_posting_id',
        'reservation_category_id',
        'exemptedfees'
    ];

    public function jobposting(){
        return $this->belongsTo(JobPosting::class);
    }

    public function reservationcategories(){
        return $this->belongsTo(ReservationCategory::class, 'reservation_category_id');
    }
}
