<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('req_peminjamans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_user')->index('id_user');
            $table->unsignedBigInteger('id_kategori')->index('id_kategori');
            $table->unsignedBigInteger('id_rak_peminjam')->index('id_gudang_peminjam');
            $table->string('nama_barang');
            $table->timestamp('tanggal_diperlukan')->useCurrentOnUpdate()->useCurrent();
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
};
