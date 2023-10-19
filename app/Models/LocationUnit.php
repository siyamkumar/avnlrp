<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationUnit extends Model
{
    use HasFactory;
    protected $fillable = [
        'unit_code',
        'unit_name',
        'address',
        'about',
        ];

    public function jobpostings(){
        return $this->hasMany(JobPosting::class);
    }
    
}
