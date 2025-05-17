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
         Schema::create('PollingApi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->text('Question');
            $table->timestamp('pub_date');
            $table->timestamps();
        });
        Schema::create('Choice', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('Question');
            $table->text('choice');
            $table->integer('votes')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('Question');
        Schema::dropIfExists('Choice');
    }
};
