<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormlinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formlinks', function (Blueprint $table) {
            $table->id('id_link');
            $table->bigInteger('id_forms')->unsigned();
            $table->string('nama_formlink');
            $table->string('link');
            $table->foreign('id_forms')->references('id_forms')->on('forms');
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
        Schema::dropIfExists('formlinks');
    }
}
