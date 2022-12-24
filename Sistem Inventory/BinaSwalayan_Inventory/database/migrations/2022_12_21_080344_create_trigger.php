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

        DB::unprepared('CREATE TRIGGER log_delete_barang AFTER DELETE ON barangs
        FOR EACH ROW
        BEGIN
            INSERT INTO log_delete_barangs SET id_barang = old.id, nama_deleted = old.nama,
                        id_kategori_deleted = old.id_kategori, id_rak_deleted = old.id_rak,
                        id_supplier_deleted = old.id_supplier, deleted_at = now();
        END
        ');

        DB::unprepared('CREATE TRIGGER log_delete_user AFTER DELETE ON users
        FOR EACH ROW
        BEGIN
            INSERT INTO log_delete_users SET id_user = old.id, nama_deleted = old.nama,
                        username_deleted = old.username, level_deleted = old.level,
                        jenis_kelamin_deleted = old.jenis_kelamin, alamat_deleted = old.alamat,
                        no_telp_deleted = old.no_telp, id_outlet_deleted = old.id_outlet, deleted_at = now();
        END
        ');

        DB::unprepared('CREATE TRIGGER log_update_barang BEFORE UPDATE ON barangs
        FOR EACH ROW
        BEGIN
            INSERT INTO log_update_barangs SET id_barang = old.id, nama_updated = new.nama, nama_old = old.nama,
                        id_kategori_updated = new.id_kategori, id_kategori_old = old.id_kategori,
                        id_Rak_updated = new.id_rak, id_Rak_old = old.id_rak,
                        id_Supplier_updated = new.id_supplier, id_Supplier_old = old.id_supplier, updated_at = now();
        END
        ');

        DB::unprepared('CREATE TRIGGER log_update_user BEFORE UPDATE ON users
        FOR EACH ROW
        BEGIN
            INSERT INTO log_update_users SET id_user = old.id, nama_updated = new.nama, nama_old = old.nama,
                        level_updated = new.level, level_old = old.level,
                        jenis_kelamin_updated = new.jenis_kelamin, jenis_kelamin_old = old.jenis_kelamin,
                        alamat_updated = new.alamat, alamat_old = old.alamat,
                        no_telp_updated = new.no_telp, no_telp_old = old.no_telp,
                        id_Outlet_updated = new.id_outlet, id_Outlet_old = old.id_outlet, updated_at = now();
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
        DB::unprepared('DROP TRIGGER IF EXISTS validasi_user_level_2');
        DB::unprepared('DROP TRIGGER IF EXISTS validasi_user_level_3');
        DB::unprepared('DROP TRIGGER IF EXISTS validasi_username');
        DB::unprepared('DROP TRIGGER IF EXISTS log_delete_barang');
        DB::unprepared('DROP TRIGGER IF EXISTS log_delete_user');
        DB::unprepared('DROP TRIGGER IF EXISTS log_update_barang');
        DB::unprepared('DROP TRIGGER IF EXISTS log_update_user');
    }
}
