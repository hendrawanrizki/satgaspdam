<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePilihlowonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pilihlowongan', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->unsignedBigInteger('datauser_id');
            $table->unsignedBigInteger('lowongan_id');
            $table->timestamps();
            $table->foreign('datauser_id')->references('id')->on('datauser')->onDelete('cascade');
            $table->foreign('lowongan_id')->references('id')->on('lowongan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pilihlowongan');
    }
}
