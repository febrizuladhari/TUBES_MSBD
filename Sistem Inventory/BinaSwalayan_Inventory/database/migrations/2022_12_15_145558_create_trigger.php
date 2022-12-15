<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE TRIGGER validasi_level_user BEFORE INSERT ON users
            FOR EACH ROW
            BEGIN
                IF NEW.level = "superadmin"
                THEN
                    SIGNAL SQLSTATE "45000" SET MESSAGE_TEXT = "Superadmin Cannot Be Added";
                END IF;
            END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS validasi_user_level');
    }
}
