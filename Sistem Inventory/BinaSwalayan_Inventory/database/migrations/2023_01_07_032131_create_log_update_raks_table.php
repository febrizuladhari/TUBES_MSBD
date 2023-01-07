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
        Schema::create('log_update_raks', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedBigInteger('id_rak');
            $table->unsignedBigInteger('id_gudang_new');
            $table->unsignedBigInteger('id_gudang_old');
            $table->char('nomor_rak_new', 5);
            $table->char('nomor_rak_old', 5);
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_update_raks');
    }
};
