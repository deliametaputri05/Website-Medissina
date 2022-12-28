<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->integer('id_poli');
            $table->integer('id_dokter');
            $table->integer('nik');
            $table->string('nama');
            $table->string('tempatLahir');
            $table->date('tglLahir');
            $table->integer('usia');
            $table->enum('jk', ['L', 'P']);
            $table->string('agama');
            $table->string('status');

            $table->softDeletes();
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
        Schema::dropIfExists('pasien');
    }
};
