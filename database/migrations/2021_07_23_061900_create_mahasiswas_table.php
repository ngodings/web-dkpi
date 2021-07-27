<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mhs');
            $table->string('jumlah_orang');
            $table->string('unit_kerja');
            $table->date('jangka_waktu');
            $table->string('tujuan');
            $table->string('negara');
            $table->string('surat_uns');
            $table->string('catatan_uns');
            $table->string('belmawa');
            $table->string('catatan_belmawa');
            $table->string('ktln_kemensetneg');
            $table->string('catatan_setneg');
            $table->string('status');
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
        Schema::dropIfExists('mahasiswas');
    }
}
