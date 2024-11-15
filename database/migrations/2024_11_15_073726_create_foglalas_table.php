<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('foglalas', function (Blueprint $table) {
            $table->id("id")->primary()->autoIncrement();
            $table->foreignId('konyv_id');
            $table->date("kolcsonzes_start");
            $table->date('kolcsonzes_end');
            $table->softDeletes();
          //  $table->foreign('konyv_id')->references('id')->on('books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foglalas');
    }
};
