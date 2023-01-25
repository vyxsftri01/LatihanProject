<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('no')->unique();
            $table->unsignedBigInteger('id_identitas');
            $table->unsignedBigInteger('id_villas');
            $table->integer('lama');
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->string('nama_villa');
            $table->integer('total');

            $table->foreign('id_identitas')->references('id')->on('identitas')
                ->onDelete('cascade');
            $table->foreign('id_villas')->references('id')->on('villas')
                ->onDelete('cascade');

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
        Schema::dropIfExists('pemesanans');
    }
}
