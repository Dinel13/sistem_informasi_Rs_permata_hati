<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInpatiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inpatiens', function (Blueprint $table) {
            $table->integer('id_pasien')->unsigned();
            $table->foreign('id_pasien')->references('id_pasien')->on('patiens')->onDelete('cascade');
            $table->integer('id_kamar')->unsigned();
            $table->foreign('id_kamar')->references('id_kamar')->on('kamars')->onDelete('cascade');
            $table->dateTime('tanggal_penerimaan');
            $table->dateTime('tanggal_dismisi');
            $table->foreignId('lab_no');
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
        Schema::dropIfExists('inpatiens');
    }
}
