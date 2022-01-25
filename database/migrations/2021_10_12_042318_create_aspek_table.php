<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAspekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aspek', function (Blueprint $table) {
            $table->id();
            $table->foreignId("domain_id")->constrained("domain")->onDelete("cascade")->onUpdate("cascade");
            $table->integer('no_aspek');
            $table->string('nama_aspek');
            $table->decimal('bobot_aspek', $precision = 8, $scale = 2);
            $table->decimal('indeks_target', $precision = 8, $scale = 2)->nullable();;
            $table->decimal('indeks_aspek', $precision = 8, $scale = 2)->nullable();
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
        Schema::dropIfExists('aspek');
    }
}
