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
            $table->id();
            $table->unsignedbigInteger('id_kategori')->index('id_kategori');
            $table->unsignedbigInteger('id_user')->index('id_user');
            $table->string('nama_barang');
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
