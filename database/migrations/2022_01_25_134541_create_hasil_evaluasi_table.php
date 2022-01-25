<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilEvaluasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_evaluasi', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_hasilevaluasi')->nullable();
            $table->string('nama_hasilevaluasi')->nullable();
            $table->string('link_hasilevaluasi')->nullable();
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
        Schema::dropIfExists('hasil_evaluasi');
    }
}
