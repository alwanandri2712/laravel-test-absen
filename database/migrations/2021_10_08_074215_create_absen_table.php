<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen', function (Blueprint $table) {
            $table->string('id_absen');
            $table->string('fk_id_users')->references('id_users')->on('users');
            $table->string('nama_user')->nullable();
            $table->integer('masuk')->nullable();
            $table->integer('telat')->nullable();
            $table->integer('izin')->nullable();
            $table->text('keterangan')->nullable();
            $table->date('tanggal')->nullable();
            $table->text('tanggal_2')->nullable();
            $table->time('waktu_absen')->nullable();
            $table->time('waktu_absen_keluar')->nullable();
            $table->softDeletes('deleted_at', 0);
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
        Schema::dropIfExists('absen');
    }
}
