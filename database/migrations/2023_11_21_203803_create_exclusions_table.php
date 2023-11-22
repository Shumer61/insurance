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
        Schema::create('exclusions', function (Blueprint $table) {
            $table->id();

            $table->string('package_id')->nullable();

            $table->string('exclusion1',1000)->nullable();
            $table->string('exclusion2',1000)->nullable();
            $table->string('exclusion3',1000)->nullable();
            $table->string('exclusion4',1000)->nullable();
            $table->string('exclusion5',1000)->nullable();
            $table->string('exclusion6',1000)->nullable();
            $table->string('exclusion7',1000)->nullable();
            $table->string('exclusion8',1000)->nullable();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exclusions');
    }
};
