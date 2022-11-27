<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLokasiGudangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lokasi_gudangs', function (Blueprint $table) {
            $table->foreign(['id_outlet'], 'lokasi_gudangs_ibfk_1')->references(['id'])->on('outlets')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lokasi_gudangs', function (Blueprint $table) {
            $table->dropForeign('lokasi_gudangs_ibfk_1');
        });
    }
}
