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
            $table->id();
            $table->char('id_barang', 5)->unique('id_barang');
            $table->unsignedbigInteger('id_user')->index('id_user');
            $table->timestamp('tanggal');
            $table->text('catatan');
            $table->string('bukti');
            $table->timestampsTz();
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
