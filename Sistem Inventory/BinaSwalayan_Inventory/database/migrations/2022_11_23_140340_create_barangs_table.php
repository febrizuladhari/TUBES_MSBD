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
            $table->char('id', 5)->primary();
            $table->text('nama');
            $table->char('id_kategori', 2);
            $table->char('id_rak', 10)->index('id_rak');
            $table->char('id_supplier', 2)->index('id_supplier');

            $table->unique(['id_kategori', 'id_rak', 'id_supplier'], 'id_kategori');
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
