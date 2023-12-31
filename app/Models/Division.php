<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'slug',
        'description'
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
    public function sections(){
        return $this->hasMany(Section::class);
    }

    public function documents(){
        return $this->hasMany(Document::class);
    }
}
