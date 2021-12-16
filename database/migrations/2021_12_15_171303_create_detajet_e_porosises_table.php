<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetajetEPorosisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detajet_e_porosises', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_produktit');
            $table->integer('sasia_e_porosise');
            $table->unsignedDecimal('cmimi_i_produktit', $precision = 8, $scale = 2);
            $table->unsignedDecimal('shuma_totale', $precision = 8, $scale = 2);
            $table->timestamps();
            $table->foreign('id_produktit')->references('id')->on('produktets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detajet_e_porosises');
    }
}
