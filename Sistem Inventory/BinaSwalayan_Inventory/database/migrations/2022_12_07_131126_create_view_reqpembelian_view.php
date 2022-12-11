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
        DB::statement("CREATE VIEW `view_reqpembelian` AS select `req_pembelians`.`id` AS `id`,`req_pembelians`.`nama_barang` AS `nama_barang`,`kategoris`.`id` AS `id_kategori`,`kategoris`.`nama_kategori` AS `nama_kategori`,`users`.`id` AS `id_user`,`users`.`nama` AS `nama_user`,`outlets`.`id` AS `id_outlet`,`outlets`.`nama` AS `nama_outlet` from (((`req_pembelians` left join `kategoris` on(`req_pembelians`.`id_kategori` = `kategoris`.`id`)) left join `users` on(`req_pembelians`.`id_user` = `users`.`id`)) left join `outlets` on(`users`.`id_outlet` = `outlets`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_reqpembelian`");
    }
};
