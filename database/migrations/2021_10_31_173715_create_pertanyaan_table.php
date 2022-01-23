<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('indikator_id');
            $table->string('tingkat');
            $table->text('kriteria');
            $table->foreignId("evaluasi_id")->constrained("evaluasi")->onDelete("cascade")->onUpdate("cascade");
            //$table->text('jawaban')->nullable();
            //$table->string('bukti_dukung')->nullable();
            //$table->string('capaian')->nullable();
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
        Schema::dropIfExists('pertanyaan');
    }
}
