<?php

use App\Models\Candidate;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Applicants\ApplicationReferenceNumber;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('post_graduation_education_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ApplicationReferenceNumber::class);
$table->foreignIdFor(Candidate::class);
            $table->string('course_name');
            $table->string('college_name');
            $table->string('university_name');
            $table->year('year_of_passing');
            $table->integer('score');
            $table->string('marksheet_path');
            $table->string('file_name')->nullable();
           $table->string('file_type')->nullable();
           $table->unsignedBigInteger('file_size')->nullable();
           $table->boolean('isValid')->nullable();
            $table->longText('valid_remarks')->nullable();
            $table->longText('invalid_remarks')->nullable();    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_graduation_education_details');
    }
};
