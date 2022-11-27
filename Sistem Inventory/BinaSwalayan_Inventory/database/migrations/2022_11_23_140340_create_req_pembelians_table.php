<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReqPembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('req_pembelians', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('id_kategori', 2);
            $table->char('id_user', 5);
            $table->text('nama_barang');

            $table->unique(['id_kategori', 'id_user'], 'id_kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('req_pembelians');
    }
}
