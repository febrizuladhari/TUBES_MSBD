<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReqPeminjamansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('req_peminjamans', function (Blueprint $table) {
            $table->char('id_user', 5);
            $table->char('id_barang', 5)->index('id_barang');
            $table->date('tanggal_diperlukan');
            $table->integer('id', true);

            $table->unique(['id_user', 'id_barang'], 'id_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('req_peminjamans');
    }
}
