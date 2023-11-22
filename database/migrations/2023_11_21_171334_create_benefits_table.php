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
        Schema::create('benefits', function (Blueprint $table) {
            $table->id();

            $table->string('package_id')->nullable();

            $table->string('benefit1',1000)->nullable();
            $table->string('limit1',1000)->nullable();

            $table->string('benefit2',1000)->nullable();
            $table->string('limit2',1000)->nullable();

            $table->string('benefit3',1000)->nullable();
            $table->string('limit3',1000)->nullable();

            $table->string('benefit4',1000)->nullable();
            $table->string('limit4',1000)->nullable();

            $table->string('benefit5',1000)->nullable();
            $table->string('limit5',1000)->nullable();

            $table->string('benefit6',1000)->nullable();
            $table->string('limit6',1000)->nullable();

            $table->string('benefit7',1000)->nullable();
            $table->string('limit7',1000)->nullable();

           



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('benefits');
    }
};
