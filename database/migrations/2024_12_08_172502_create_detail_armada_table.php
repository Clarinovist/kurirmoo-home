<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailArmadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_detail_armada', function (Blueprint $table) {
            $table->id();
            $table->string('ukuran_karoseri');
            $table->string('berat');
            $table->string('ukuran_mobil');
            $table->string('mesin');
            $table->string('roda');
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
        Schema::dropIfExists('tb_detail_armada');
    }
}
