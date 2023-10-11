<?php

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
        Schema::table('application_reference_numbers', function (Blueprint $table) {
            $table->string('shortlist_remarks')->nullable();
            $table->string('reject_remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('application_reference_numbers', function (Blueprint $table) {
            $table->dropColumn('shortlist_remarks');
            $table->dropColumn('reject_remarks');
        });
    }
};
