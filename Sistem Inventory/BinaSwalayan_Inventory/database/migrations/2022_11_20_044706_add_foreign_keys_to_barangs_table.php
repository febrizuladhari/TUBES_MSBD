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
            $table->foreign(['id_Supplier'], 'barangs_ibfk_2')->references(['id'])->on('suppliers')->onUpdate('CASCADE');
            $table->foreign(['id_Kategori'], 'barangs_ibfk_1')->references(['Kategori'])->on('kategoris')->onUpdate('CASCADE');
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
        });
    }
}
