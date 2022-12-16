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
        DB::statement("CREATE VIEW `view_rak` AS select `msbd`.`lokasi_raks`.`id` AS `id_rak`,`msbd`.`lokasi_raks`.`rak` AS `rak`,`msbd`.`lokasi_gudangs`.`id` AS `id_gudang`,`msbd`.`lokasi_gudangs`.`gudang` AS `gudang`,`msbd`.`outlets`.`id` AS `id_outlet`,`msbd`.`outlets`.`nama` AS `outlet` from ((`msbd`.`lokasi_raks` left join `msbd`.`lokasi_gudangs` on(`msbd`.`lokasi_raks`.`id_gudang` = `msbd`.`lokasi_gudangs`.`id`)) left join `msbd`.`outlets` on(`msbd`.`lokasi_gudangs`.`id_outlet` = `msbd`.`outlets`.`id`))");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS `view_rak`");
    }
};
