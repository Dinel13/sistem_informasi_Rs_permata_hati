<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihans', function (Blueprint $table) {
            $table->increments('id_bill');
            $table->integer('id_pasien')->unsigned();
            // $table->foreign('id_pasien')->references('id_pasien')->on('dokters')->onDelete('cascade');
            $table->foreign('id_pasien')->references('id_pasien')->on('patiens')->onDelete('cascade');
            $table->integer('biaya_dokter');
            $table->integer('biaya_kamar');
            $table->integer('biaya_lab');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tagihans');
    }
}
