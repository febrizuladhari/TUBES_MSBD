<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
class Req_PeminjamansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $b = [];
        $faker = Factory::create();
        for($i = 1; $i <= 3; $i++)
        {
        $b[] = [

            'id_barang' => \App\Models\Barang::pluck('id')->random(),
            'id_user' => rand(1,3),
            'tanggal_diperlukan' => $faker->dateTime($max = 'now'),
            
        ];
    }
    \DB::table('req_peminjamans')->insert($b);
}
}
