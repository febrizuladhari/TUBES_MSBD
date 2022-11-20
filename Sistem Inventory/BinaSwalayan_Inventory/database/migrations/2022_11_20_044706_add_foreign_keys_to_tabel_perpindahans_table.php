<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTabelPerpindahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tabel_perpindahans', function (Blueprint $table) {
            $table->foreign(['id_Barang'], 'tabel_perpindahans_ibfk_3')->references(['id'])->on('barangs')->onUpdate('CASCADE');
            $table->foreign(['id_Outlet_Peminjam'], 'tabel_perpindahans_ibfk_2')->references(['id'])->on('outlets')->onUpdate('CASCADE');
            $table->foreign(['id_User'], 'tabel_perpindahans_ibfk_1')->references(['id'])->on('users')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tabel_perpindahans', function (Blueprint $table) {
            $table->dropForeign('tabel_perpindahans_ibfk_3');
            $table->dropForeign('tabel_perpindahans_ibfk_2');
            $table->dropForeign('tabel_perpindahans_ibfk_1');
        });
    }
}
