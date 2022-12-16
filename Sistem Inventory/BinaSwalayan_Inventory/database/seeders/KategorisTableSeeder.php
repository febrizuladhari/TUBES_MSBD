<?php

namespace Database\Seeders;

use App\Models\Kategori;
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
        // $kategori = [];
        // $faker = Factory::create();

        // for($i = 1; $i <= 6; $i++)
        // {
        // $kategori[] = [
        //     'nama_kategori' => $faker->unique()->word(),
        // ];
        // }
        // \DB::table('kategoris')->insert($kategori);

        Kategori::create([
            'id' => '1',
            'nama_kategori' => 'elektronik',
        ]);

        Kategori::create([
            'id' => '2',
            'nama_kategori' => 'homeware',
        ]);

        
    }
}
