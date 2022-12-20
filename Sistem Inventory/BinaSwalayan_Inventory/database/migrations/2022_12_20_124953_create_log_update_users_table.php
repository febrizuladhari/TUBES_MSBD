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
        Schema::create('log_update_users', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedBigInteger('id_user');
            $table->string('nama_updated', 150);
            $table->string('nama_old', 150);
            $table->enum('level_updated', ['superadmin', 'admin', 'staff']);
            $table->enum('level_old', ['superadmin', 'admin', 'staff']);
            $table->enum('jenis_kelamin_updated', ['P', 'W']);
            $table->enum('jenis_kelamin_old', ['P', 'W']);
            $table->text('alamat_updated');
            $table->text('alamat_old');
            $table->char('no_telp_updated', 13);
            $table->char('no_telp_old', 13);
            $table->unsignedBigInteger('id_outlet_updated');
            $table->unsignedBigInteger('id_outlet_old');
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
        Schema::dropIfExists('log_update_users');
    }
};
