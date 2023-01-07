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
        Schema::create('log_delete_gudangs', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedBigInteger('id_gudang');
            $table->unsignedBigInteger('id_outlet');
            $table->string('nama_gudang');
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
        Schema::dropIfExists('log_delete_gudangs');
    }
};
