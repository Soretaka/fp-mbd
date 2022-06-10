<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelajar_ujians', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->foreignId('pelajar_id');
            $table->foreignId('ujian_id');
            $table->integer('nilai');
            $table->boolean('status');
            $table->integer('benar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelajar_ujians');
    }
};
