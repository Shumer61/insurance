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
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();

            $table->string('hospital1',1000)->nullable();
            $table->string('hospital2',1000)->nullable();
            $table->string('hospital3',1000)->nullable();
            $table->string('hospital4',1000)->nullable();
            $table->string('hospital5',1000)->nullable();
            $table->string('hospital6',1000)->nullable();
            $table->string('hospital7',1000)->nullable();
            $table->string('hospital8',1000)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitals');
    }
};
