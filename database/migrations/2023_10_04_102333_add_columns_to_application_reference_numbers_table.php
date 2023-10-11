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
            $table->boolean('isShortlisted')->nullable();
            $table->date('declaration_date')->nullable();
            $table->string('place')->nullable();
            $table->string('signature_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('application_reference_numbers', function (Blueprint $table) {
            $table->dropColumn('isShortlisted');
            $table->dropColumn('declaration_date');
            $table->dropColumn('place');
            $table->dropColumn('signature_path');
        });
    }
};
