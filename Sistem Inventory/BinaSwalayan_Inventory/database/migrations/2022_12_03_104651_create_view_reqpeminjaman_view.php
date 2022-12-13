<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `view_reqpeminjaman` AS select `msbd`.`req_peminjamans`.`id` AS `id`,`msbd`.`kategoris`.`id` AS `id_kategori`,`msbd`.`kategoris`.`nama_kategori` AS `kategori`,`msbd`.`users`.`id` AS `id_user`,`msbd`.`users`.`nama` AS `USER`,`msbd`.`lokasi_raks`.`id` AS `id_rak`,`msbd`.`lokasi_raks`.`rak` AS `rak`,`msbd`.`lokasi_gudangs`.`id` AS `id_gudang`,`msbd`.`lokasi_gudangs`.`gudang` AS `gudang`,`msbd`.`outlets`.`id` AS `id_outlet`,`msbd`.`outlets`.`nama` AS `outlet`,`msbd`.`req_peminjamans`.`nama_barang` AS `nama_barang`,`msbd`.`req_peminjamans`.`tanggal_diperlukan` AS `tanggal_diperlukan` from (((((`msbd`.`lokasi_raks` join `msbd`.`lokasi_gudangs` on(`msbd`.`lokasi_raks`.`id_gudang` = `msbd`.`lokasi_gudangs`.`id`)) join `msbd`.`outlets` on(`msbd`.`lokasi_gudangs`.`id_outlet` = `msbd`.`outlets`.`id`)) join `msbd`.`req_peminjamans` on(`msbd`.`lokasi_raks`.`id` = `msbd`.`req_peminjamans`.`id_rak_peminjam`)) join `msbd`.`kategoris` on(`msbd`.`req_peminjamans`.`id_kategori` = `msbd`.`kategoris`.`id`)) join `msbd`.`users` on(`msbd`.`req_peminjamans`.`id_user` = `msbd`.`users`.`id`))");
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
};
