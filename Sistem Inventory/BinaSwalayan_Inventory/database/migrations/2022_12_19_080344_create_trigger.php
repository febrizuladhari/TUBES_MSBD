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

        DB::unprepared('CREATE TRIGGER validasi_level_user_2 BEFORE UPDATE ON users
            FOR EACH ROW
            BEGIN
                IF NEW.level = "superadmin"
                THEN
                    SIGNAL SQLSTATE "45000" SET MESSAGE_TEXT = "Superadmin Cannot Be Added";
                END IF;
            END
        ');

        DB::unprepared('CREATE TRIGGER validasi_level_user_3 BEFORE DELETE ON users
            FOR EACH ROW
            BEGIN
                IF OLD.level = "superadmin"
                THEN
                    SIGNAL SQLSTATE "45000" SET MESSAGE_TEXT = "Superadmin Cannot Be Deleted";
                END IF;
            END
        ');
        
        DB::unprepared('CREATE TRIGGER validasi_username BEFORE UPDATE ON users
            FOR EACH ROW
            BEGIN
                IF OLD.username != NEW.username
                THEN
                    SIGNAL SQLSTATE "45000" SET MESSAGE_TEXT = "Username Cannot be Edited";
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