<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToHistoryPerpindahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('history_perpindahans', function (Blueprint $table) {
            $table->foreign(['id_user'], 'history_perpindahans_ibfk_3')->references(['id'])->on('users')->onUpdate('CASCADE');
            $table->foreign(['id_outlet_peminjam'], 'history_perpindahans_ibfk_2')->references(['id'])->on('outlets')->onUpdate('CASCADE');
            $table->foreign(['id_barang'], 'history_perpindahans_ibfk_1')->references(['id'])->on('barangs')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('history_perpindahans', function (Blueprint $table) {
            $table->dropForeign('history_perpindahans_ibfk_3');
            $table->dropForeign('history_perpindahans_ibfk_2');
            $table->dropForeign('history_perpindahans_ibfk_1');
        });
    }
}
