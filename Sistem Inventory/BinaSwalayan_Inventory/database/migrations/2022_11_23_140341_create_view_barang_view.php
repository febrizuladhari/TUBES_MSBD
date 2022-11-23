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
        DB::statement("CREATE VIEW `view_barang` AS select `msbd`.`barangs`.`id` AS `id`,`msbd`.`barangs`.`Nama` AS `Nama`,`msbd`.`kategoris`.`Nama_Kategori` AS `Kategori`,`msbd`.`lokasi_raks`.`Rak` AS `Rak`,`msbd`.`lokasi_gudangs`.`Gudang` AS `Gudang`,`msbd`.`outlets`.`Nama` AS `Outlet`,case when (select exists(select `msbd`.`barangs`.`id` from `msbd`.`perbaikans` where `msbd`.`barangs`.`id` = `msbd`.`perbaikans`.`id_Barang` limit 1)) = 1 then 'Perbaikan' when (select exists(select `msbd`.`barangs`.`id` from `msbd`.`laporan_rusaks` where `msbd`.`barangs`.`id` = `msbd`.`laporan_rusaks`.`id_Barang` limit 1)) = 1 then 'Rusak' when (select exists(select `msbd`.`barangs`.`id` from `msbd`.`tabel_perpindahans` where `msbd`.`tabel_perpindahans`.`id` = `msbd`.`tabel_perpindahans`.`id_Barang` limit 1)) = 1 then 'Dipinjam' else 'GOOD' end AS `Status` from ((((`msbd`.`kategoris` left join `msbd`.`barangs` on(`msbd`.`barangs`.`id_Kategori` = `msbd`.`kategoris`.`id`)) left join `msbd`.`lokasi_raks` on(`msbd`.`barangs`.`id_Rak` = `msbd`.`lokasi_raks`.`id`)) left join `msbd`.`lokasi_gudangs` on(`msbd`.`lokasi_raks`.`id_Gudang` = `msbd`.`lokasi_gudangs`.`id`)) left join `msbd`.`outlets` on(`msbd`.`lokasi_gudangs`.`id_Outlet` = `msbd`.`outlets`.`id`))");
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
