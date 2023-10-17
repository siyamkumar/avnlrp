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
        Schema::create('application_reference_numbers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class);
            $table->foreignIdFor(JobPosting::class);
            $table->string('arn')->unique();
            $table->string('mode_of_payment')->nullable();
            $table->string('fee_details')->nullable();
            $table->string('payment_proof')->nullable();
            $table->string('status');            
            $table->boolean('isSubmitted')->default(false);
            $table->dateTime('submitted_at')->nullable();
            $table->string('file_name')->nullable();
            $table->string('file_type')->nullable();
            $table->unsignedBigInteger('file_size')->nullable();
            $table->date('declaration_date')->nullable();
            $table->string('place')->nullable();
            $table->string('signature_path')->nullable();
            $table->boolean('isShortlisted')->nullable();
            $table->string('shortlist_remarks')->nullable();
            $table->string('reject_remarks')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_reference_numbers');
    }
};
