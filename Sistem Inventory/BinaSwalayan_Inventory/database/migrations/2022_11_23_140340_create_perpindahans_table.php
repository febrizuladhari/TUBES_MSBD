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
            $table->id();
            $table->date('tanggal_keluar');
            $table->char('id_barang', 5)->unique('id_barang');
            $table->unsignedBigInteger('id_outlet_peminjam')->index('id_outlet_peminjam');
            $table->unsignedBigInteger('id_user')->index('id_user');

            $table->unique(['id_barang']);
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
