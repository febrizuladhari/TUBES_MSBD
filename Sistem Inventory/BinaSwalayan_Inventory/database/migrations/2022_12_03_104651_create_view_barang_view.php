<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateViewBarangView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `view_barang` AS select `msbd`.`barangs`.`id` AS `id`,`msbd`.`barangs`.`nama` AS `Nama`,`msbd`.`kategoris`.`nama_kategori` AS `Kategori`,`msbd`.`lokasi_raks`.`rak` AS `Rak`,`msbd`.`lokasi_gudangs`.`gudang` AS `Gudang`,`msbd`.`outlets`.`nama` AS `Outlet`,case when (select exists(select `msbd`.`barangs`.`id` from `msbd`.`perbaikans` where `msbd`.`barangs`.`id` = `msbd`.`perbaikans`.`id_barang` limit 1)) = 1 then 'Perbaikan' when (select exists(select `msbd`.`barangs`.`id` from `msbd`.`laporan_rusaks` where `msbd`.`barangs`.`id` = `msbd`.`laporan_rusaks`.`id_barang` limit 1)) = 1 then 'Rusak' when (select exists(select `msbd`.`barangs`.`id` from `msbd`.`perpindahans` where `msbd`.`barangs`.`id` = `msbd`.`perpindahans`.`id_barang` limit 1)) = 1 then 'Dipinjam' else 'GOOD' end AS `Status` from ((((`msbd`.`kategoris` left join `msbd`.`barangs` on(`msbd`.`barangs`.`id_kategori` = `msbd`.`kategoris`.`id`)) left join `msbd`.`lokasi_raks` on(`msbd`.`barangs`.`id_rak` = `msbd`.`lokasi_raks`.`id`)) left join `msbd`.`lokasi_gudangs` on(`msbd`.`lokasi_raks`.`id_gudang` = `msbd`.`lokasi_gudangs`.`id`)) left join `msbd`.`outlets` on(`msbd`.`lokasi_gudangs`.`id_outlet` = `msbd`.`outlets`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_barang`");
    }
}
