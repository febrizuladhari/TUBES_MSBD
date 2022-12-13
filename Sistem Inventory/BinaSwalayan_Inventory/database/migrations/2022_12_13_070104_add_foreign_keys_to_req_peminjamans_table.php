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
        Schema::table('req_peminjamans', function (Blueprint $table) {
            $table->foreign(['id_user'], 'req_peminjamans_ibfk_2')->references(['id'])->on('users')->onUpdate('CASCADE');
            $table->foreign(['id_kategori'], 'req_peminjamans_ibfk_4')->references(['id'])->on('kategoris')->onUpdate('CASCADE');
            $table->foreign(['id_rak_peminjam'], 'req_peminjamans_ibfk_3')->references(['id'])->on('lokasi_raks')->onUpdate('CASCADE');
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
            $table->dropForeign('req_peminjamans_ibfk_4');
            $table->dropForeign('req_peminjamans_ibfk_3');
        });
    }
};
