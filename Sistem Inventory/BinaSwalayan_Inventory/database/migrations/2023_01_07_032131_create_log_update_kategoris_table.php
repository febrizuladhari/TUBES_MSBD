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
        Schema::create('log_update_kategoris', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedBigInteger('id_kategori');
            $table->string('nama_kategori_new');
            $table->string('nama_kategori_old');
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
        Schema::dropIfExists('log_update_kategoris');
    }
};
