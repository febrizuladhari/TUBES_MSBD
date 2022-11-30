<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;

class KategorisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = [];
        $faker = Factory::create();

        for($i = 1; $i <= 6; $i++)
        {
        $kategori[] = [
            'nama_kategori' => $faker->unique()->word(),
        ];
        }
        \DB::table('kategoris')->insert($kategori);
    }
}
