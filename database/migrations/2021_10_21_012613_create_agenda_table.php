<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->foreignId("jenisagenda_id");
            $table->string('nama_acara');
            $table->string('perihal');
            $table->string('tanggal_acara');
            $table->string('waktu_acara');
            $table->text('tempat_acara');
            $table->text('link_upload');
            $table->string('surat');
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
        Schema::dropIfExists('agenda');
    }
}
