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
        Schema::create('laporan_hilangs', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('id_barang', 6)->index('laporan_hilangs_ibfk_1');
            $table->timestamp('tanggal_hilang')->useCurrentOnUpdate()->useCurrent();
            $table->unsignedBigInteger('id_user')->index('laporan_hilangs_ibfk_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan_hilangs');
    }
};
