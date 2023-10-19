<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Applicants\PersonalDetail;
use Illuminate\Database\Eloquent\Model;

class ReservationCategory extends Model
{
    
    use HasFactory;
    protected $fillable = [
       'code',
       'name',
       ];

    public function personaldetails(){
        return $this->hasMany(PersonalDetail::class);
    }
}
