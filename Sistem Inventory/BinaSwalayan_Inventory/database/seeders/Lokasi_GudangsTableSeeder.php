<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
class Lokasi_GudangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $LokB = [];
        $faker = Factory::create();

        for($i = 1; $i <= 6; $i++)
        {
        $LokB[] = [
            'id_outlet' => rand(1,2),
            'gudang' => $faker->word(),
        ];
        }
        \DB::table('lokasi_gudangs')->insert($LokB);
    }
}
