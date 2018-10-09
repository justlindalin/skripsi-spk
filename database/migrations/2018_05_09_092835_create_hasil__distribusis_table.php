<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasilDistribusisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil__distribusis', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('distribusi_id')->unsigned();
            $table->integer('berat_pengiriman')->nullable();
            $table->integer('total_biayaOperasional')->nullable();


            $table->foreign('distribusi_id')->references('id')->on('distribusis')
            ->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil__distribusis');
    }
}
