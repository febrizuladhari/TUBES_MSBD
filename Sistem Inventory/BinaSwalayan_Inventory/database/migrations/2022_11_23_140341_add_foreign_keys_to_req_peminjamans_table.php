<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReqPeminjamansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('req_peminjamans', function (Blueprint $table) {
            $table->foreign(['id_User'], 'req_peminjamans_ibfk_2')->references(['id'])->on('users')->onUpdate('CASCADE');
            $table->foreign(['id_Barang'], 'req_peminjamans_ibfk_1')->references(['id'])->on('barangs')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('req_peminjamans', function (Blueprint $table) {
            $table->dropForeign('req_peminjamans_ibfk_2');
            $table->dropForeign('req_peminjamans_ibfk_1');
        });
    }
}
