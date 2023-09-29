<?php

use App\Models\Applicants\ApplicationReferenceNumber;
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
        Schema::create('experience_details', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(Candidate::class);
            $table->string('companyName');
            $table->string('postName');
            $table->date('periodFrom');
            $table->date('periodTo');
            $table->string('payScale');
            $table->double('ctc');
            $table->string('experience_path');
            $table->text('file_name');
            $table->text('file_type');
            $table->integer('file_size');
            $table->text('jobsSummary');
            $table->foreignIdFor(ApplicationReferenceNumber::class);
            $table->timestamps();
            $table->softDeletes();
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
