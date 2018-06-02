<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->increments('karyawan_id');
            $table->integer('jabatan_id')->unsigned();
            $table->string('nama_karyawan', 30);
            $table->date('tgl_lahir');
            $table->string('alamat', 100);
            $table->string('no_hp', 13);
            $table->timestamps();
            $table->foreign('jabatan_id')->references('jabatan_id')->on('jabatans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('karyawans');
    }
}
