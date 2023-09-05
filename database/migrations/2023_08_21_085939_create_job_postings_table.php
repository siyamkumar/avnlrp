<?php

use App\Models\User;
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
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id();
            $table->date('jobPostingDate');
            $table->date('jobPostingLastDate');
            $table->string('jobAdvertismentNo');
            $table->string('jobTitle');
            $table->string('category');
            $table->string('jobLocation');
            $table->integer('vacancy');
            $table->integer('tenure');
            $table->bigInteger('renumeration');
            $table->foreignIdFor(User::class);
            $table->string('status')->default('draft');
            $table->longText('summary')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_postings');
    }
};
