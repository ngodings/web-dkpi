<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePimpinansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pimpinans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('jumlah_orang');
            $table->string('unit_kerja');
            $table->date('jangka_waktu_awal');
            $table->date('jangka_waktu_akhir');
            $table->string('tujuan');
            $table->string('negara');
            $table->text('catatan_uns');
            $table->string('menteri');
            $table->string('ktln_kemensetneg');
            $table->text('catatan_setneg');
            $table->string('file_surat');
            $table->string('file_menteri');
            $table->string('file_ktln');
            $table->enum('status_hidden', ['ya', 'tidak']);
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
        Schema::dropIfExists('pimpinans');
    }
}
