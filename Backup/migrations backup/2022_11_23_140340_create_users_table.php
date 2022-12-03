<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->text('nama');
            $table->char('username', 20)->unique();
            $table->string('password');
            $table->enum('level', ['superadmin', 'admin', 'staff']);
            $table->enum('jenis_kelamin', ['P', 'W']);
            $table->text('alamat');
            $table->char('no_telp', 13)->unique();
            $table->unsignedbigInteger('id_outlet')->index('id_outlet');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
