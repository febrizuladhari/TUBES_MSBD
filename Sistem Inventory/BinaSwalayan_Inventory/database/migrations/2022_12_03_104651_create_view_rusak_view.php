<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateViewRusakView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `view_rusak` AS select `laporan_rusaks`.`id_barang` AS `id`,`msbd`.`laporan_rusaks`.`bukti` AS `bukti`,`barangs`.`nama` AS `nama_barang`,`kategoris`.`nama_kategori` AS `kategori`,`lokasi_raks`.`rak` AS `rak`,`lokasi_gudangs`.`gudang` AS `gudang`,`outlets`.`nama` AS `nama` from (((((`laporan_rusaks` join `barangs` on(`laporan_rusaks`.`id_barang` = `barangs`.`id`)) join `kategoris` on(`barangs`.`id_kategori` = `kategoris`.`id`)) join `lokasi_raks` on(`barangs`.`id_rak` = `lokasi_raks`.`id`)) join `lokasi_gudangs` on(`lokasi_raks`.`id_gudang` = `lokasi_gudangs`.`id`)) join `outlets` on(`lokasi_gudangs`.`id_outlet` = `outlets`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_rusak`");
    }
}
