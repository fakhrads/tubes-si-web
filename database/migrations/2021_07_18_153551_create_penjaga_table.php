<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjagaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjaga', function (Blueprint $table) {
            $table->unsignedBigInteger('id_petugas');
            $table->timestamps();

            $table->foreign('id_petugas')->references('id_petugas')->on('petugas_perpustakaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjaga');
    }
}
