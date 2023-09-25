<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJadwalseleksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwalseleksi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengumuman');
            $table->string('deskripsi', 10000);
            $table->datetime('tanggal_seleksi');
            $table->string('lokasi_seleksi');
            $table->string('file');
            $table->unsignedBigInteger('pilihlowongan_id');
            $table->foreign('pilihlowongan_id')->references('id')->on('pilihlowongan')->onDelete('cascade');
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
        Schema::dropIfExists('jadwalseleksi');
    }
}
