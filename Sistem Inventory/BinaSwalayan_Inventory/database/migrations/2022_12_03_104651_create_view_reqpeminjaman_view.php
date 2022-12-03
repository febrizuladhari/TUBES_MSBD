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
        DB::statement("CREATE VIEW `view_reqpeminjaman` AS select `msbd`.`req_peminjamans`.`id_barang` AS `id`,`msbd`.`barangs`.`nama` AS `nama_barang`,`msbd`.`kategoris`.`nama_kategori` AS `kategori`,`outlets_alias1`.`nama` AS `asal`,`outlets_alias2`.`nama` AS `tujuan`,`msbd`.`users`.`username` AS `user`,`msbd`.`req_peminjamans`.`tanggal_diperlukan` AS `tanggal` from (((((((`msbd`.`barangs` left join `msbd`.`kategoris` on(`msbd`.`barangs`.`id_kategori` = `msbd`.`kategoris`.`id`)) join `msbd`.`lokasi_raks` on(`msbd`.`barangs`.`id_rak` = `msbd`.`lokasi_raks`.`id`)) join `msbd`.`lokasi_gudangs` on(`msbd`.`lokasi_raks`.`id_gudang` = `msbd`.`lokasi_gudangs`.`id`)) join `msbd`.`outlets` `outlets_alias1` on(`msbd`.`lokasi_gudangs`.`id_outlet` = `outlets_alias1`.`id`)) join `msbd`.`req_peminjamans` on(`msbd`.`barangs`.`id` = `msbd`.`req_peminjamans`.`id_barang`)) join `msbd`.`users` on(`msbd`.`req_peminjamans`.`id_user` = `msbd`.`users`.`id`)) join `msbd`.`outlets` `outlets_alias2` on(`msbd`.`users`.`id_outlet` = `outlets_alias2`.`id`))");
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
