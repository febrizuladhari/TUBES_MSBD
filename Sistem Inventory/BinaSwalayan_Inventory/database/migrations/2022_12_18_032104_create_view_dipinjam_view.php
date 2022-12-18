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
        DB::statement("CREATE VIEW `view_dipinjam` AS select `msbd`.`barangs`.`id` AS `id_barang`,`msbd`.`barangs`.`nama` AS `nama_barang`,`outlets_alias1`.`id` AS `id_outlet_peminjam`,`outlets_alias1`.`nama` AS `outlet_peminjam`,`msbd`.`lokasi_raks`.`id` AS `id_rak_asal`,`msbd`.`lokasi_raks`.`rak` AS `rak_asal`,`msbd`.`lokasi_gudangs`.`id` AS `id_gudang_asal`,`msbd`.`lokasi_gudangs`.`gudang` AS `gudang_asal`,`outlets_alias2`.`id` AS `id_outlet_asal`,`outlets_alias2`.`nama` AS `outlet_asal`,`msbd`.`perpindahans`.`tanggal_keluar` AS `tanggal_keluar`,`msbd`.`perpindahans`.`id_user` AS `id_user` from (((((`msbd`.`perpindahans` left join `msbd`.`outlets` `outlets_alias1` on(`msbd`.`perpindahans`.`id_outlet_peminjam` = `outlets_alias1`.`id`)) left join `msbd`.`barangs` on(`msbd`.`perpindahans`.`id_barang` = `msbd`.`barangs`.`id`)) left join `msbd`.`lokasi_raks` on(`msbd`.`barangs`.`id_rak` = `msbd`.`lokasi_raks`.`id`)) left join `msbd`.`lokasi_gudangs` on(`msbd`.`lokasi_raks`.`id_gudang` = `msbd`.`lokasi_gudangs`.`id`)) left join `msbd`.`outlets` `outlets_alias2` on(`msbd`.`lokasi_gudangs`.`id_outlet` = `outlets_alias2`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_dipinjam`");
    }
};
