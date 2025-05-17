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
        Schema::create('micro_lending', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('email')->unique();
            $table->decimal('credit_score');
            $table->timestamps();
        });
        
        Schema::create('creditors', function (Blueprint $table) {
            
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->decimal('amount');
            $table->timestamp('credited_at')->nullable();
            $table->timestamp('payment_at')->nullable();
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('micro_lending');
        Schema::dropIfExists('creditors');
    
    }
};
