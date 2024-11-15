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
        Schema::create('books', function (Blueprint $table) {
            $table->id("id")->primary()->autoIncrement();
            $table->timestamps();
            $table->string('cim');
            $table->string('szerzo');
            $table->foreignId('mufaj_id');
            $table->integer('kiadas_eve');
            $table->softDeletes();
         //   $table->foreign('mufaj_id')->references('id')->on('mufajs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
