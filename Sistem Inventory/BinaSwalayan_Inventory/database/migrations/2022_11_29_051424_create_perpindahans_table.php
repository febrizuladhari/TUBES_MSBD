<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerpindahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpindahans', function (Blueprint $table) {
            $table->char('id', 3)->primary();
            $table->date('tanggal_keluar');
            $table->char('id_barang', 5);
            $table->char('id_outlet_peminjam', 3)->index('id_outlet_peminjam');
            $table->char('id_user', 5)->index('id_user');

            $table->unique(['id_barang', 'id_outlet_peminjam', 'id_user'], 'id_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perpindahans');
    }
}
