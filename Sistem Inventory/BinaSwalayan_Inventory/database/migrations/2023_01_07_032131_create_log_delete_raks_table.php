<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_delete_raks', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedBigInteger('id_rak');
            $table->unsignedBigInteger('id_gudang');
            $table->char('nomor_rak', 5);
            $table->softDeletes()->nullable(false)->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_delete_raks');
    }
};
