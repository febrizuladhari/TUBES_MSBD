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
        Schema::create('log_update_barangs', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('id_barang', 5);
            $table->string('nama_updated');
            $table->string('nama_old');
            $table->unsignedBigInteger('id_kategori_updated');
            $table->unsignedBigInteger('id_kategori_old');
            $table->unsignedBigInteger('id_Rak_updated');
            $table->unsignedBigInteger('id_Rak_old');
            $table->unsignedBigInteger('id_Gudang_updated');
            $table->unsignedBigInteger('id_Gudang_old');
            $table->unsignedBigInteger('id_Outlet_updated');
            $table->unsignedBigInteger('id_Outlet_old');
            $table->unsignedBigInteger('id_Supplier_updated');
            $table->unsignedBigInteger('id_Supplier_old');
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_update_barangs');
    }
};
