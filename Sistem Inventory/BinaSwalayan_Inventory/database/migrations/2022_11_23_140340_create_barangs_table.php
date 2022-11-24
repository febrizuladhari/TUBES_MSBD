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
            $table->text('Nama');
            $table->char('id_Kategori', 2);
            $table->char('id_Rak', 10)->index('id_Rak');
            $table->char('id_Supplier', 2)->index('id_Supplier');

            $table->unique(['id_Kategori', 'id_Rak', 'id_Supplier'], 'id_Kategori');
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
