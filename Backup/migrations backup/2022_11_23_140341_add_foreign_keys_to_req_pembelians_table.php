<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReqPembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('req_pembelians', function (Blueprint $table) {
            $table->foreign(['id_kategori'], 'req_pembelians_ibfk_1')->references(['id'])->on('kategoris')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('req_pembelians', function (Blueprint $table) {
            $table->dropForeign('req_pembelians_ibfk_1');
        });
    }
}
