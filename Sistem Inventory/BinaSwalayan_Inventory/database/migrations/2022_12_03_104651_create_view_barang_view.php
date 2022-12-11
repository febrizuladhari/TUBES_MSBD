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
        DB::statement("CREATE VIEW `view_barang` AS select `barangs`.`id` AS `id`,`barangs`.`nama` AS `Nama`,`kategoris`.`id` AS `id_Kategori`,`kategoris`.`nama_kategori` AS `Kategori`,`lokasi_raks`.`id` AS `id_Rak`,`lokasi_raks`.`rak` AS `Rak`,`lokasi_gudangs`.`id` AS `id_Gudang`,`lokasi_gudangs`.`gudang` AS `Gudang`,`outlets`.`id` AS `id_Outlet`,`outlets`.`nama` AS `Outlet`,case when (select exists(select `barangs`.`id` from `perbaikans` where `barangs`.`id` = `perbaikans`.`id_barang` limit 1)) = 1 then 'Perbaikan' when (select exists(select `barangs`.`id` from `laporan_rusaks` where `barangs`.`id` = `laporan_rusaks`.`id_barang` limit 1)) = 1 then 'Rusak' when (select exists(select `barangs`.`id` from `perpindahans` where `barangs`.`id` = `perpindahans`.`id_barang` limit 1)) = 1 then 'Dipinjam' else 'GOOD' end AS `Status`,`suppliers`.`id` AS `id_Supplier`,`suppliers`.`nama` AS `Supplier` from (((((`barangs` left join `kategoris` on(`barangs`.`id_kategori` = `kategoris`.`id`)) left join `lokasi_raks` on(`barangs`.`id_rak` = `lokasi_raks`.`id`)) left join `lokasi_gudangs` on(`lokasi_raks`.`id_gudang` = `lokasi_gudangs`.`id`)) left join `outlets` on(`lokasi_gudangs`.`id_outlet` = `outlets`.`id`)) left join `suppliers` on(`barangs`.`id_supplier` = `suppliers`.`id`))");
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
};
