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
        DB::statement("CREATE VIEW `view_hilang` AS select `msbd`.`laporan_hilangs`.`id_barang` AS `id`,`msbd`.`barangs`.`nama` AS `nama_barang`,`msbd`.`kategoris`.`nama_kategori` AS `kategori`,`msbd`.`lokasi_raks`.`rak` AS `rak`,`msbd`.`lokasi_gudangs`.`gudang` AS `gudang`,`msbd`.`outlets`.`nama` AS `nama`,`msbd`.`laporan_hilangs`.`tanggal_hilang` AS `tanggal_hilang`,`msbd`.`users`.`nama` AS `nama_user` from ((((((`msbd`.`laporan_hilangs` join `msbd`.`barangs` on(`msbd`.`laporan_hilangs`.`id_barang` = `msbd`.`barangs`.`id`)) join `msbd`.`kategoris` on(`msbd`.`barangs`.`id_kategori` = `msbd`.`kategoris`.`id`)) join `msbd`.`lokasi_raks` on(`msbd`.`barangs`.`id_rak` = `msbd`.`lokasi_raks`.`id`)) join `msbd`.`lokasi_gudangs` on(`msbd`.`lokasi_raks`.`id_gudang` = `msbd`.`lokasi_gudangs`.`id`)) join `msbd`.`users` on(`msbd`.`laporan_hilangs`.`id_user` = `msbd`.`users`.`id`)) join `msbd`.`outlets` on(`msbd`.`lokasi_gudangs`.`id_outlet` = `msbd`.`outlets`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_hilang`");
    }
};
