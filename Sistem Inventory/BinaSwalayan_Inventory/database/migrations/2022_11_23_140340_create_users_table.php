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
            $table->char('id', 5)->primary();
            $table->text('nama');
            $table->char('username', 20)->unique();
            $table->string('password');
            $table->enum('level', ['superadmin', 'admin', 'staff']);
            $table->enum('jenis_Kelamin', ['P', 'W']);
            $table->text('alamat');
            $table->char('no_Telp', 13)->unique();
            $table->char('id_Outlet', 3);
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
