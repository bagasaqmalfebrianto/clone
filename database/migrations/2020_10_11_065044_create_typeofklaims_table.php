<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeofklaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typeofklaims', function (Blueprint $table) {
            $table->id('id_type');
            $table->bigInteger('id_klaim')->unsigned();
            $table->string('nama_type');
            $table->string('keterangan_type', 5000);
            $table->string('gambar');
            $table->foreign('id_klaim')->references('id_klaim')->on('klaims');
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
        Schema::dropIfExists('typeofklaims');
    }
}
