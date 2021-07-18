<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePustakawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pustakawan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pustakawan');
            $table->string('jabatan');
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
        Schema::dropIfExists('pustakawan');
    }
}
