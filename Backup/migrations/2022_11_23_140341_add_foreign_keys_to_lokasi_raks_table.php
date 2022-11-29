<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLokasiRaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lokasi_raks', function (Blueprint $table) {
            $table->foreign(['id_gudang'], 'lokasi_raks_ibfk_1')->references(['id'])->on('lokasi_gudangs')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lokasi_raks', function (Blueprint $table) {
            $table->dropForeign('lokasi_raks_ibfk_1');
        });
    }
}
