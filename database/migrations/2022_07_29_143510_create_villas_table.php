<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillasTable extends Migration
{
    public function up()
    {
        Schema::create('villas', function (Blueprint $table) {
            $table->id();
            $table->string('kode_villa')->unique();
            $table->string('nama_villa');
            $table->string('jenis_villa');
            $table->string('foto');
            $table->integer('harga');
            // membuat fk id_siswa yang mengacu kpd field id di table
            // siswas
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
        Schema::dropIfExists('villas');
    }
};
