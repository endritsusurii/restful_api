<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlientetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klientets', function (Blueprint $table) {
            $table->id();
            $table->string('emri');
            $table->string('mbiemri');
            $table->bigInteger('nr_tel');
            $table->string('adresa');
            $table->string('qyteti');
            $table->string('shteti');
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
        Schema::dropIfExists('klientets');
    }
}
