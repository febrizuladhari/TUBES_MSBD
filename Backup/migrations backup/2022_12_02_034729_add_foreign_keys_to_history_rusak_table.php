<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToHistoryRusakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('history_rusak', function (Blueprint $table) {
            $table->foreign(['id_barang'], 'history_rusak_ibfk_1')->references(['id'])->on('barangs')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('history_rusak', function (Blueprint $table) {
            $table->dropForeign('history_rusak_ibfk_1');
        });
    }
}
