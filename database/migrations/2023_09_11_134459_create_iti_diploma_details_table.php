<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Applicants\ApplicationReferenceNumber;
use App\Models\Candidate;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('iti_diploma_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ApplicationReferenceNumber::class);

            $table->foreignIdFor(Candidate::class);
            $table->string('courseName');
            $table->string('collegeName');
            $table->string('universityName');
            $table->year('year_of_passing');
            $table->integer('score');
            $table->string('marksheet_path')->nullable();
            $table->string('file_name')->nullable();
            $table->string('file_type')->nullable();
            $table->unsignedBigInteger('file_size')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iti_diploma_details');
    }
};
