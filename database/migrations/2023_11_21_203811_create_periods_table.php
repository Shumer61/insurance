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
        Schema::create('periods', function (Blueprint $table) {
            $table->id();

            $table->string('package_id')->nullable();

            $table->string('period1',1000)->nullable();
            $table->string('period2',1000)->nullable();
            $table->string('period3',1000)->nullable();
            $table->string('period4',1000)->nullable();
            $table->string('period5',1000)->nullable();
            $table->string('period6',1000)->nullable();
            $table->string('period7',1000)->nullable();
            $table->string('period8',1000)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periods');
    }
};
