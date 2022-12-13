<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OutletsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(KategorisTableSeeder::class);
        $this->call(SuppliersTableSeeder::class);
        $this->call(Lokasi_GudangsTableSeeder::class);
        $this->call(Lokasi_RaksTableSeeder::class);
        $this->call(BarangsTableSeeder::class);
        $this->call(PerbaikansTableSeeder::class);
        $this->call(PerpindahansTableSeeder::class);
        $this->call(PeminjamansTableSeeder::class);
        // $this->call(Req_PeminjamansTableSeeder::class);
        $this->call(Req_PembeliansTableSeeder::class);
        $this->call(Laporan_RusaksTableSeeder::class);
        $this->call(Laporan_RusaksTableSeeder::class);


    }
}
