<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
class BarangsTableSeeder extends Seeder
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
            'id' => rand(10000,99999),
            'nama' => $faker->word(),
            'id_kategori' => rand(1,6),
            'id_rak' => rand(1,10),
            'id_supplier' => rand(1,10),
        ];
        }
        \DB::table('barangs')->insert($b);
    }
}
