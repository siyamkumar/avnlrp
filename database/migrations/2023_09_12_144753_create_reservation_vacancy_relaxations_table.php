<?php

use App\Models\JobPosting;
use App\Models\ReservationCategory;
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
        Schema::create('reservation_vacancy_relaxations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(JobPosting::class);
            $table->foreignIdFor(ReservationCategory::class);
            $table->integer('vacancy');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_vacancy_relaxations');
    }
};
