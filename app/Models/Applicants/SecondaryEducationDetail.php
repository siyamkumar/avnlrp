<?php

namespace App\Models\Applicants;
use App\Models\Applicants\ApplicationReferenceNumber;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondaryEducationDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'candidate_id',
        'school_name',
        'school_board',
        'year_of_passing',
        'score',
        'marksheet_path',
        'file_name',
        'file_type',
        'file_size',
        'application_reference_number_id',
    ];

    // protected $casts = [
    //     'year_of_passing' => 'datetime:Y'
    // ];
    public function jobapplication(){
        return $this->belongsTo(ApplicationReferenceNumber::class);
    }

}
