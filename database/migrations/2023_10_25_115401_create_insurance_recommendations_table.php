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
        Schema::create('insurance_recommendations', function (Blueprint $table) {
            $table->id();

            $table->string('insurance_company')->nullable();
            $table->string('age')->nullable();
            $table->string('amount_range')->nullable();
            $table->string('exact_price')->nullable();
            $table->string('package_name')->nullable();
            $table->string('package_desc')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insurance_recommendations');
    }
};
