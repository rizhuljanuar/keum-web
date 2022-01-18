<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_keum');
            $table->string('no_surat');
            $table->string('kode');
            $table->date('tanggal_dispo');
            $table->date('tanggal_surat');
            $table->string('asal_surat');
            $table->string('lampiran');
            $table->string('perihal');
            $table->string('disposisi_setditjen');
            $table->string('disposisi_kabag');
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
        Schema::dropIfExists('surat_masuk');
    }
}
