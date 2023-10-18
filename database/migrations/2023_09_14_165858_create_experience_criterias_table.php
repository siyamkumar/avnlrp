<?php

use App\Models\JobPosting;
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
        Schema::create('experience_criterias', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(JobPosting::class);
            $table->integer('minExp')->nullable();
            $table->integer('maxExp')->nullable();
            $table->string('desiredExperience')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience_criterias');
    }
};
