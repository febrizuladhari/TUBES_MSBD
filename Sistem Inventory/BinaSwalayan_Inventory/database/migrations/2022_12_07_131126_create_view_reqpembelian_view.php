<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateViewReqpembelianView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `view_reqpembelian` AS select `msbd`.`req_pembelians`.`nama_barang` AS `nama_barang`,`users_alias1`.`id` AS `user_id`,`users_alias1`.`nama` AS `USER`,`msbd`.`kategoris`.`id` AS `id_kategori`,`msbd`.`kategoris`.`nama_kategori` AS `kategori`,`msbd`.`outlets`.`id` AS `id_outlet`,`msbd`.`outlets`.`nama` AS `outlet` from (((`msbd`.`req_pembelians` join `msbd`.`users` `users_alias1` on(`msbd`.`req_pembelians`.`id_user` = `users_alias1`.`id`)) join `msbd`.`kategoris` on(`msbd`.`req_pembelians`.`id_kategori` = `msbd`.`kategoris`.`id`)) join `msbd`.`outlets` on(`users_alias1`.`id_outlet` = `msbd`.`outlets`.`id`))");
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
}
