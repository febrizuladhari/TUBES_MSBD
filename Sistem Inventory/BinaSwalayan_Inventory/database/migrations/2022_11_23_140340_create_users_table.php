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
            $table->text('Nama');
            $table->char('username', 20)->unique();
            $table->string('Password', 30);
            $table->enum('Level', ['superadmin', 'admin', 'staff']);
            $table->enum('Jenis_Kelamin', ['P', 'W']);
            $table->text('Alamat');
            $table->char('No_Telp', 13)->unique();
            $table->char('id_Outlet', 3);
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
