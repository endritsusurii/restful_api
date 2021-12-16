<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagesats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_klientit');
            $table->datetime('data_pageses');
            $table->unsignedDecimal('shuma', $precision = 8, $scale = 2);
            $table->timestamps();

            $table->foreign('id_klientit')->references('id')->on('klientets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagesats');
    }
}
