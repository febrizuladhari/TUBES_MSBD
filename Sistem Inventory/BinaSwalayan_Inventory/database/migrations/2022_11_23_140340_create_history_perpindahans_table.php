<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryPerpindahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_perpindahans', function (Blueprint $table) {
            $table->id();
            $table->char('id_barang', 5);
            $table->unsignedBigInteger('id_outlet_peminjam')->index('id_outlet_peminjam');
            $table->timestamp('tanggal_keluar')->nullable();
            $table->timestamp('tanggal_kembali')->nullable();
            $table->unsignedBigInteger('id_user')->index('id_user');
            $table->index(['id_barang', 'id_outlet_peminjam', 'id_user'], 'id_barang');
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
        Schema::dropIfExists('history_perpindahans');
    }
}
