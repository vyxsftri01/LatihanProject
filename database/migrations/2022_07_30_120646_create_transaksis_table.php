<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('no')->unique();
            $table->unsignedBigInteger('id_pemesanans');
            $table->string('nama');
            $table->string('nama_villa');
            $table->string('jenis_villa');
            $table->string('lama');
            $table->integer('harga');
            $table->integer('total');
            $table->integer('bayar');
            $table->integer('sisa');


            $table->foreign('id_pemesanans')->references('id')->on('pemesanans')
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
        Schema::dropIfExists('transaksis');
    }
}
