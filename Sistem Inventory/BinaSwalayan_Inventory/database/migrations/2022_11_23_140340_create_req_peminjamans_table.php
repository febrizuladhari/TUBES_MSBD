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
            $table->char('id_User', 5);
            $table->char('id_Barang', 5)->index('id_Barang');
            $table->date('Tanggal_Diperlukan');
            $table->integer('id', true);

            $table->unique(['id_User', 'id_Barang'], 'id_User');
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
