<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lowongan', function (Blueprint $table) {
            $table->id();
            $table->string('judul_lowongan');
            $table->string('deskripsi_lowongan');
            $table->date('tanggal_mulai');
            $table->date('tanggal_akhir');
            $table->string('penempatan');
            $table->string('posisi_jabatan');
            $table->string('jenis_kelamin');
            $table->string('pendidikan');
            $table->string('jurusan');
            $table->string('syarat_dokumen')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('file')->nullable();
            $table->unsignedBigInteger('kategori_lowongan');
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
        Schema::dropIfExists('lowongan');
    }
}
