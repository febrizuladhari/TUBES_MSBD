<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateViewReqpeminjamanView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `view_reqpeminjaman` AS select `req_peminjamans`.`id_barang` AS `id`,`barangs`.`nama` AS `nama_barang`,`kategoris`.`nama_kategori` AS `kategori`,`outlets_alias1`.`nama` AS `asal`,`outlets_alias2`.`nama` AS `tujuan`,`users`.`username` AS `user`,`req_peminjamans`.`tanggal_diperlukan` AS `tanggal` from (((((((`barangs` left join `kategoris` on(`barangs`.`id_kategori` = `kategoris`.`id`)) join `lokasi_raks` on(`barangs`.`id_rak` = `lokasi_raks`.`id`)) join `lokasi_gudangs` on(`lokasi_raks`.`id_gudang` = `lokasi_gudangs`.`id`)) join `outlets` `outlets_alias1` on(`lokasi_gudangs`.`id_outlet` = `outlets_alias1`.`id`)) join `req_peminjamans` on(`barangs`.`id` = `req_peminjamans`.`id_barang`)) join `users` on(`req_peminjamans`.`id_user` = `users`.`id`)) join `outlets` `outlets_alias2` on(`users`.`id_outlet` = `outlets_alias2`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_reqpeminjaman`");
    }
}
