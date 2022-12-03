<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLaporanRusaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('laporan_rusaks', function (Blueprint $table) {
            $table->foreign(['id_user'], 'laporan_rusaks_ibfk_1')->references(['id'])->on('users')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('laporan_rusaks', function (Blueprint $table) {
            $table->dropForeign('laporan_rusaks_ibfk_1');
        });
    }
}
