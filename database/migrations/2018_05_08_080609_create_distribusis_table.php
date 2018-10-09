<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistribusisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribusis', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('admin_id')->unsigned();
            
            $table->string('jenis_hewan')->nullable();
            $table->integer('berat_permintaan')->nullable();
            $table->integer('biaya_pengiriman')->nullable();


              $table->foreign('admin_id')->references('id')->on('users')
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
        Schema::dropIfExists('distribusis');
    }
}
