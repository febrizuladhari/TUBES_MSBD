<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('barangs', function (Blueprint $table) {
            $table->foreign(['id_supplier'], 'barangs_ibfk_2')->references(['id'])->on('suppliers')->onUpdate('CASCADE');
            $table->foreign(['id_kategori'], 'barangs_ibfk_1')->references(['id'])->on('kategoris')->onUpdate('CASCADE');
            $table->foreign(['id_rak'], 'barangs_ibfk_3')->references(['id'])->on('lokasi_raks')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('barangs', function (Blueprint $table) {
            $table->dropForeign('barangs_ibfk_2');
            $table->dropForeign('barangs_ibfk_1');
            $table->dropForeign('barangs_ibfk_3');
        });
    }
}
