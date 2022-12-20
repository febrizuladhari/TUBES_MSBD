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
        Schema::create('log_delete_users', function (Blueprint $table) {
            $table->integer('id');
            $table->unsignedBigInteger('id_user');
            $table->string('nama_deleted', 150);
            $table->char('username_deleted', 20);
            $table->enum('level_deleted', ['superadmin', 'admin', 'staff']);
            $table->enum('jenis_kelamin_deleted', ['P', 'W']);
            $table->text('alamat_deleted');
            $table->char('no_telp_deleted', 13);
            $table->unsignedBigInteger('id_outlet_deleted');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_delete_users');
    }
};
