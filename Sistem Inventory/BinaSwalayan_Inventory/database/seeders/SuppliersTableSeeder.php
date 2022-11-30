<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = [];
        $faker = Factory::create();

        for($i = 1; $i <= 10; $i++)
        {
        $supplier[] = [
            'nama' => $faker->name(),
        ];
        }
        \DB::table('suppliers')->insert($supplier);
    }
}
