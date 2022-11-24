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
            $table->char('id_Kategori', 2);
            $table->char('id_User', 5);
            $table->text('Nama Barang');

            $table->unique(['id_Kategori', 'id_User'], 'id_Kategori');
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
