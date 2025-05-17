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
        Schema::create('propertyrentalapi', function (Blueprint $table) {
            
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('location');
            $table->foreignId('user_id')->nullable()->index();
            $table->string('available');
            $table->timestamp('posted');
            $table->timestamp('updated');
            $table->timestamps();
        });
    }

    /**
    * Reverse the migrations.
    */
    public function down(): void
    {
        //
        Schema::dropIfExists('propertyrentalapi');
    }
};