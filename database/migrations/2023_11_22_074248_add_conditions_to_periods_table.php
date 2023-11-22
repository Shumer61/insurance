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
        Schema::table('periods', function (Blueprint $table) {
            $table->string('condition1',1000)->nullable();
            $table->string('condition2',1000)->nullable();
            $table->string('condition3',1000)->nullable();
            $table->string('condition4',1000)->nullable();
            $table->string('condition5',1000)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('periods', function (Blueprint $table) {
            //
        });
    }
};
