<?php

use App\Models\Candidate;
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
        Schema::create('experience_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class);
            $table->string('companyName')->nullable();
            $table->string('postName')->nullable();
            $table->string('periodFrom')->nullable();
            $table->string('periodTo')->nullable();
            $table->string('payScale')->nullable();
            $table->string('ctc')->nullable();
            $table->string('experience_path')->nullable();
            $table->string('jobsSummary')->nullable();
           
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience_details');
    }
};
