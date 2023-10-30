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
        Schema::create('secondary_education_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class);
            $table->foreignIdFor(ApplicationReferenceNumber::class);
            $table->string('school_name')->nullable();
            $table->string('school_board')->nullable();
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
        Schema::dropIfExists('secondary_education_details');
    }
};
