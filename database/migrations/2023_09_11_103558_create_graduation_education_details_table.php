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
        Schema::create('graduation_education_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class);
            $table->foreignIdFor(ApplicationReferenceNumber::class);
            $table->string('course_name')->nullable();
            $table->string('college_name')->nullable();
            $table->string('university_name')->nullable();
            $table->year('year_of_passing')->nullable();
            $table->integer('score')->nullable();
            $table->string('marksheet_path')->nullable();
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
        Schema::dropIfExists('graduation_education_details');
    }
};
