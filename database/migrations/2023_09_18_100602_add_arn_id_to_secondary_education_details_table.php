<?php

use App\Models\Applicants\ApplicationReferenceNumber;
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
        Schema::table('secondary_education_details', function (Blueprint $table) {
            $table->foreignIdFor(ApplicationReferenceNumber::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('secondary_education_details', function (Blueprint $table) {
            $table->dropColumn('application_reference_number_id');
        });
    }
};
