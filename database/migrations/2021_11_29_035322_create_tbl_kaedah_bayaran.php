<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblKaedahBayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_kaedah_bayaran', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('bayaran_id');
            $table->foreign('bayaran_id')->references('id')->on('tbl_bayaran');

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
        Schema::dropIfExists('tbl_kaedah_bayaran');
    }
}
