<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelPerpindahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_perpindahans', function (Blueprint $table) {
            $table->char('id', 3)->primary();
            $table->date('Tanggal_Keluar');
            $table->char('id_Barang', 5);
            $table->char('id_Outlet_Peminjam', 3)->index('id_Outlet_Peminjam');
            $table->char('id_User', 5)->index('id_User');

            $table->unique(['id_Barang', 'id_Outlet_Peminjam', 'id_User'], 'id_Barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_perpindahans');
    }
}
