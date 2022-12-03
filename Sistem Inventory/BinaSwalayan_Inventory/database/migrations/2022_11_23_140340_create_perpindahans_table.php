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
            $table->char('id_barang', 5)->unique();
            $table->unsignedbigInteger('id_outlet_peminjam')->index('id_outlet_peminjam');
            $table->unsignedbigInteger('id_user')->index('id_user');
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
