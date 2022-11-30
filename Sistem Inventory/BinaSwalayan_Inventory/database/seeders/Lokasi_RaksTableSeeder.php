<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
class Lokasi_RaksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $LokR = [];
        $faker = Factory::create();

        for($i = 1; $i <= 100; $i++)
        {
        $LokR[] = [
            'id_gudang' => rand(1,6),
            'rak' => rand(1,10),
        ];
        }
        \DB::table('lokasi_raks')->insert($LokR);
    }
}
