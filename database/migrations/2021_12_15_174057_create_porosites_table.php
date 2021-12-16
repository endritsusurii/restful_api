<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePorositesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porosites', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_klientit');
            $table->unsignedBigInteger('id_detajet_e_porosise');
            $table->datetime('data_e_dergeses');
            $table->boolean('statusi');
            $table->text('koment')->default('0');
            $table->timestamps();
            $table->foreign('id_klientit')->references('id')->on('klientets');
            $table->foreign('id_detajet_e_porosise')->references('id')->on('detajet_e_porosises');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('porosites');
    }
}
