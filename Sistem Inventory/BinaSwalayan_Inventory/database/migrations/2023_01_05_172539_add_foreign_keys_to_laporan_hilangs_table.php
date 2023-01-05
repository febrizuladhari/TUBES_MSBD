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
        Schema::table('laporan_hilangs', function (Blueprint $table) {
            $table->foreign(['id_user'], 'laporan_hilangs_ibfk_2')->references(['id'])->on('users')->onUpdate('CASCADE');
            $table->foreign(['id_barang'], 'laporan_hilangs_ibfk_1')->references(['id'])->on('barangs')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laporan_hilangs', function (Blueprint $table) {
            $table->dropForeign('laporan_hilangs_ibfk_2');
            $table->dropForeign('laporan_hilangs_ibfk_1');
        });
    }
};
