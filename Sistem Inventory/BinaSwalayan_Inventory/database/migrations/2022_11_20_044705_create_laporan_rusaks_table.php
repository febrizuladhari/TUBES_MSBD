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
            $table->char('id_Barang', 5);
            $table->char('id_User', 5)->index('id_User');
            $table->date('Tanggal');

            $table->unique(['id_Barang', 'id_User'], 'id_Barang');
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
