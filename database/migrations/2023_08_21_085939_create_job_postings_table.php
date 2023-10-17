<?php

use App\Models\User;
use App\Models\LocationUnit;
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
            $table->foreignIdFor(LocationUnit::class);
            $table->date('jobPostingDate')->nullable();
            $table->date('jobPostingLastDate')->nullable();
            $table->string('jobAdvertismentNo')->nullable();
            $table->string('jobTitle')->nullable();
            $table->string('category')->nullable();
            $table->string('jobLocation')->nullable();
            $table->integer('vacancy')->nullable();
            $table->integer('tenure')->nullable();
            $table->bigInteger('renumeration')->nullable();
            $table->foreignIdFor(User::class)->nullable();
            $table->string('status')->default('draft')->nullable();
            $table->longText('summary')->nullable();
            $table->boolean('isContract')->nullable();
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
