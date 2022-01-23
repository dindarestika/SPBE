<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndikatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indikator', function (Blueprint $table) {
            $table->id();
            $table->foreignId("aspek_id")->constrained("aspek")->onDelete("cascade")->onUpdate("cascade");
            $table->foreignId("opd_id")->constrained("opd")->onDelete("cascade")->onUpdate("cascade");
            $table->integer('no_indikator');
            $table->string('nama_indikator');
            $table->decimal('bobot_indikator', $precision = 8, $scale = 2);
            $table->text('penjelasan_indikator')->nullable();
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
        Schema::dropIfExists('indikator');
    }
}
