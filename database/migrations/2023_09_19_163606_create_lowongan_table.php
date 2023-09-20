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
            $table->unsignedBigInteger('kategori_id');
            $table->timestamps();
            $table->foreign('kategori_id')
            ->references('id')
            ->on('')
            ->onDelete('cascade');
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
