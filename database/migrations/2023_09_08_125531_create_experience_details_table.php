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
        Schema::create('experience_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class);
            $table->string('companyName');
            $table->string('postName');
            $table->date('periodFrom');
            $table->date('periodTo');
            $table->float('payScale');
            $table->float('ctc');
            $table->string('experience_path');
            $table->string('jobsSummary');
            $table->timestamps();
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
