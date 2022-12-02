<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
class Laporan_RusaksTableSeeder extends Seeder
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

        for($i = 1; $i <= 100; $i++)
        {
        $b[] = [

            'id_barang' => rand(1,6),
            'id_user' => rand(1,3),
            'tanggal' => $faker->dateTime($max = 'now'),
        ];
        }
        \DB::table('barangs')->insert($b);
    }
}
