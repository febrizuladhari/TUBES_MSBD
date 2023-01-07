<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

        DB::unprepared('CREATE TRIGGER log_delete_gudang AFTER DELETE ON lokasi_gudangs
        FOR EACH ROW
        BEGIN
            INSERT INTO log_delete_gudangs SET id_gudang = old.id, id_outlet = old.id_outlet,
                        nama_gudang = old.gudang, deleted_at = now();
        END
        ');

        DB::unprepared('CREATE TRIGGER log_delete_kategori AFTER DELETE ON kategoris
        FOR EACH ROW
        BEGIN
            INSERT INTO log_delete_kategoris SET id_kategori = old.id, nama_kategori = old.nama_kategori,
                        deleted_at = now();
        END
        ');

        DB::unprepared('CREATE TRIGGER log_delete_outlet AFTER DELETE ON outlets
        FOR EACH ROW
        BEGIN
            INSERT INTO log_delete_outlets SET id_outlet = old.id, nama_outlet = old.nama,
                        deleted_at = now();
        END
        ');

        DB::unprepared('CREATE TRIGGER log_delete_rak AFTER DELETE ON lokasi_raks
        FOR EACH ROW
        BEGIN
            INSERT INTO log_delete_raks SET id_rak = old.id, id_gudang = old.id_gudang,
                        nomor_rak = old.rak, deleted_at = now();
        END
        ');

        DB::unprepared('CREATE TRIGGER log_delete_supplier AFTER DELETE ON uppliers
        FOR EACH ROW
        BEGIN
            INSERT INTO log_delete_suppliers SET id_supplier = old.id, nama_supplier = old.nama,
                        deleted_at = now();
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

        DB::unprepared('CREATE TRIGGER log_update_gudang BEFORE UPDATE ON lokasi_gudangs
        FOR EACH ROW
        BEGIN
            INSERT INTO log_update_gudangs SET id_gudang = old.id, id_outlet_new = new.id_outlet, id_outlet_old = old.id_outlet,
                        nama_gudang_new = new.gudang, nama_gudang_old = old.gudang, updated_at = now();
        END
        ');

        DB::unprepared('CREATE TRIGGER log_update_kategori BEFORE UPDATE ON kategoris
        FOR EACH ROW
        BEGIN
            INSERT INTO log_update_kategoris SET id_kategori = old.id
                        nama_kategori_new = new.nama_kategori, nama_kategori_old = old.nama_kategori, updated_at = now();
        END
        ');

        DB::unprepared('CREATE TRIGGER log_update_outlet BEFORE UPDATE ON outlets
        FOR EACH ROW
        BEGIN
            INSERT INTO log_update_outlets SET id_outlet = old.id
                        nama_outlet_new = new.nama, nama_outlet_old = old.nama, updated_at = now();
        END
        ');

        DB::unprepared('CREATE TRIGGER log_update_rak BEFORE UPDATE ON lokasi_raks
        FOR EACH ROW
        BEGIN
            INSERT INTO log_update_raks SET id_rak = old.id, id_gudang_new = new.id_gudang, id_gudang_old = old.id_gudang,
                        nomor_rak_new = new.rak, nomor_rak_old = old.rak, updated_at = now();
        END
        ');

        DB::unprepared('CREATE TRIGGER log_update_supllier BEFORE UPDATE ON suplliers
        FOR EACH ROW
        BEGIN
            INSERT INTO log_update_suplliers SET id_supllier = old.id,
                        nama_supllier_new = new.nama, nama_supllier_old = old.nama, updated_at = now();
        END
        ');

        DB::unprepared('CREATE TRIGGER validasi_barang_hilang BEFORE INSERT ON perpindahans
        FOR EACH ROW
        BEGIN
            IF EXISTS (SELECT NEW.id_barang FROM barangs JOIN laporan_hilangs WHERE barangs.id = laporan_hilangs.id_barang)
            THEN
                SIGNAL SQLSTATE "45000" SET MESSAGE_TEXT = "Lost Item Cannot Be Moved";
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
        DB::unprepared('DROP TRIGGER IF EXISTS validasi_user_level_2');
        DB::unprepared('DROP TRIGGER IF EXISTS validasi_user_level_3');
        DB::unprepared('DROP TRIGGER IF EXISTS validasi_username');
        DB::unprepared('DROP TRIGGER IF EXISTS log_delete_barang');
        DB::unprepared('DROP TRIGGER IF EXISTS log_delete_user');
        DB::unprepared('DROP TRIGGER IF EXISTS log_update_barang');
        DB::unprepared('DROP TRIGGER IF EXISTS log_update_user');
    }
}
