<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLokasiBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lokasi_barangs', function (Blueprint $table) {
            $table->foreign(['id_Outlet'], 'lokasi_barangs_ibfk_1')->references(['id'])->on('outlets')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lokasi_barangs', function (Blueprint $table) {
            $table->dropForeign('lokasi_barangs_ibfk_1');
        });
    }
}
