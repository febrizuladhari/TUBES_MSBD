<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanRusaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_rusaks', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('id_barang', 5);
            $table->char('id_user', 5)->index('id_user');
            $table->date('tanggal');

            $table->unique(['id_barang', 'id_user'], 'id_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan_rusaks');
    }
}
