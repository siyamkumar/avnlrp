<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('location_units', function (Blueprint $table) {
            $table->id();
            $table->string('unit_code')->unique();
            $table->string('unit_name');
            $table->string('address');
            $table->longText('about');
            $table->timestamps();
        });

        Artisan::call('db:seed', [
            '--class' => 'LocationUnitSeeder',
            '--force' => true // <--- add this line
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location_units');
    }
};
