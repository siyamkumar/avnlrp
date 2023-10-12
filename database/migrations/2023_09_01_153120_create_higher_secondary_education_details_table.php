<?php

use App\Models\Candidate;
use App\Models\Applicants\ApplicationReferenceNumber;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('higher_secondary_education_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class);
            $table->foreignIdFor(ApplicationReferenceNumber::class);
            $table->string('school_name');
            $table->string('school_board');
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
        Schema::dropIfExists('higher_secondary_education_details');
    }
};
