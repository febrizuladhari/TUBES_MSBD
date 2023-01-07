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
        Schema::create('log_update_gudangs', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedBigInteger('id_gudang');
            $table->unsignedBigInteger('id_outlet_new');
            $table->unsignedBigInteger('id_outlet_old');
            $table->string('nama_gudang_new');
            $table->string('nama_gudang_old');
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
        Schema::dropIfExists('log_update_gudangs');
    }
};
