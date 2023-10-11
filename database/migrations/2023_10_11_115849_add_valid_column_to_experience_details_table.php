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
        Schema::table('experience_details', function (Blueprint $table) {
            $table->boolean('isValid')->nullable();
            $table->longText('valid_remarks')->nullable();
            $table->longText('invalid_remarks')->nullable();       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('experience_details', function (Blueprint $table) {
            $table->dropColumn('isValid');
            $table->dropColumn('valid_remarks');
            $table->dropColumn('invalid_remarks');
        });
    }
};
