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
            $table->id();
            $table->unsignedbigInteger('id_user')->index('id_user');
            $table->char('id_barang')->index('id_barang');
            $table->timestamp('tanggal_diperlukan');
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
