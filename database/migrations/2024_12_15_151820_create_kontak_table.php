<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kontak', function (Blueprint $table) {
            $table->id();
            $table->text('alamat');
            $table->string('no_hp');
            $table->text('instagram')->nullable()->default(NULL);
            $table->text('youtube')->nullable()->default(NULL);
            $table->text('email')->nullable()->default(NULL);
            $table->text('playstore')->nullable()->default(NULL);
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
        Schema::dropIfExists('kontak');
    }
}
