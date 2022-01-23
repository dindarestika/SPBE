<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanUmumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan_umum', function (Blueprint $table) {
            $table->id();
            $table->foreignId("evaluasi_id")->constrained("evaluasi")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("opd_id")->constrained("opd")->onDelete("cascade")->onUpdate("cascade");
            $table->text('soal');
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
        Schema::dropIfExists('pertanyaan_umum');
    }
}
