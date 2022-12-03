<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPerpindahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perpindahans', function (Blueprint $table) {
            $table->foreign(['id_outlet_peminjam'], 'perpindahans_ibfk_2')->references(['id'])->on('outlets')->onUpdate('CASCADE');
            $table->foreign(['id_user'], 'perpindahans_ibfk_1')->references(['id'])->on('users')->onUpdate('CASCADE');
            $table->foreign(['id_barang'], 'perpindahans_ibfk_3')->references(['id'])->on('barangs')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perpindahans', function (Blueprint $table) {
            $table->dropForeign('perpindahans_ibfk_2');
            $table->dropForeign('perpindahans_ibfk_1');
            $table->dropForeign('perpindahans_ibfk_3');
        });
    }
}
