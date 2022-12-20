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
        Schema::create('log_delete_barangs', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('id_barang', 5);
            $table->string('nama_deleted');
            $table->unsignedBigInteger('id_kategori_deleted');
            $table->unsignedBigInteger('id_rak_deleted');
            $table->unsignedBigInteger('id_supplier_deleted');
            $table->softDeletes()->nullable(false)->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_delete_barangs');
    }
};
