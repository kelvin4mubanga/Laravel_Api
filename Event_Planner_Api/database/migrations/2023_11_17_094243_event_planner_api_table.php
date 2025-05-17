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
        Schema::create('event_planner', function (Blueprint $table) {
            $table->id();
            $table->string('event');
            $table->string('description');
            $table->string('location');
            $table->string('starting');
             $table->string('ending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('event_planner');
    }
};
