<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pemesanans');
            $table->string('nama_villa');
            $table->string('jenis_villa');
            $table->integer('lama');
            $table->integer('jpesan');
            $table->date('tgl_masuk');
            $table->date('tgl_keluar');
            $table->string('harga');
            $table->unsignedBigInteger('id_transaksis');
            $table->integer('bayar');
            $table->integer('sisa');

            $table->foreign('id_pemesanans')->references('id')->on('pemesanans')
                ->onDelete('cascade');
            $table->foreign('id_transaksis')->references('id')->on('transaksis')
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
        Schema::dropIfExists('riwayats');
    }
}
