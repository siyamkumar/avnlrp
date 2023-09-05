<?php

use App\Models\Candidate;
use App\Models\RegionState;
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
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Candidate::class);
            $table->string('fatherName');
            $table->string('gender');
            $table->date('dob');
            $table->string('category');
            $table->string('aadhaarNo');
            $table->string('pan');
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('city');
            $table->foreignIdFor(RegionState::class);
            $table->string('pin_code');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_details');
    }
};
