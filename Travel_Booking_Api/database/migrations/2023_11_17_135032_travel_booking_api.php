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
        //
         Schema::create('travel_booking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('place_id');
            $table->string('status');
            $table->timestamp('date_expected');
            $table->timestamp('date_leaving');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('travel_booking');
    }
};
