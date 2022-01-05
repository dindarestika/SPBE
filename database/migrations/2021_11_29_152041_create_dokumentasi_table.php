<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumentasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumentasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agenda_id');
            $table->string('notulen');
            $table->string('surat');
            $table->string('presensi');
            $table->string('foto_acara');
            $table->string('tautan');
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
        Schema::dropIfExists('dokumentasi');
    }
}