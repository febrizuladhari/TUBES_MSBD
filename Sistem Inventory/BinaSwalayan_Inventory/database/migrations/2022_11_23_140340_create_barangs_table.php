<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->char('id', 6)->primary();
            $table->string('nama');
            $table->unsignedbigInteger('id_kategori')->index('id_kategori');
            $table->unsignedbigInteger('id_rak')->index('id_rak');
            $table->unsignedbigInteger('id_supplier')->index('id_supplier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
