<?php

use App\Models\Candidate;
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
        Schema::create('post_graduation_education_details', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Candidate::class);
            $table->string('course_name');
            $table->string('college_name');
            $table->string('university_name');
            $table->year('year_of_passing');
            $table->integer('score');
            $table->string('marksheet_path');
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
