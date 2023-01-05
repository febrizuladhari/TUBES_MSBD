<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryRusakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_rusak', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('id_barang', 5)->index('id_barang');
            $table->timestamp('tanggal_rusak')->nullable();
            $table->timestamp('tanggal_bagus')->nullable();
            $table->string('lokasi');
            $table->text('catatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history_rusak');
    }
}
