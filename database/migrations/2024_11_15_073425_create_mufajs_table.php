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
        Schema::create('mufajs', function (Blueprint $table) {
            $table->id("id")->primary()->autoIncrement();;
            $table->timestamps();
            $table->softDeletes();
            $table->string('nev');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mufajs');
    }
};
