<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->increments('peserta_id');
            $table->string('nama', 25);
            $table->string('tempat_lahir', 50);
            $table->date('tgl_lahir');
            $table->string('alamat', 100);
            $table->integer('program_id')->unsigned();
            $table->date('tgl_masuk');
            $table->timestamps();
            $table->foreign('program_id')->references('program_id')->on('programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesertas');
    }
}
