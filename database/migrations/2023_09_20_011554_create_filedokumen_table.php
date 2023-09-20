<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiledokumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filedokumen', function (Blueprint $table) {
            $table->id();
            $table->string('cv');
            $table->string('ktp');
            $table->string('kk');
            $table->string('npwp');
            $table->string('bpjs');
            $table->string('skck');
            $table->string('surat_sehat');
            $table->string('foto');
            $table->string('ijazah');
            $table->string('sertifikat');
            $table->unsignedBigInteger('datauser_id');
            $table->foreign('datauser_id')->references('id')->on('datauser')->onDelete('cascade');
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
        Schema::dropIfExists('filedokumen');
    }
}
