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
         Schema::create('smart_agriculture', function (Blueprint $table) {
            $table->id();
             $table->foreignId('user_id');
            $table->string('co-operative_name');
            $table->string('location');
            $table->string('land_size');
            $table->string('type_of_farming');
            $table->string('main_crop');
            $table->string('last_harvest');
            $table->string('finacial_record');
            $table->string('colateral');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('smart_agriculture');
    }
};
