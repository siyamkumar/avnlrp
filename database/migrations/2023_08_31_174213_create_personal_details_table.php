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
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('category')->nullable();
            $table->string('aadhaarNo')->nullable();
            $table->string('pan')->nullable();
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('city')->nullable();
            $table->foreignIdFor(RegionState::class);
            $table->string('pin_code')->nullable();
            $table->string('photo_path')->nullable();
            $table->string('sign_path')->nullable();
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
