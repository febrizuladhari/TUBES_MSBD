<?php

namespace Database\Seeders;

use App\Models\Lokasi_Gudang;
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
        // $LokB = [];
        // $faker = Factory::create();

        // for($i = 1; $i <= 6; $i++)
        // {
        // $LokB[] = [
        //     'id_outlet' => rand(1,2),
        //     'gudang' => $faker->word(),
        // ];
        // }
        // \DB::table('lokasi_gudangs')->insert($LokB);

        // BINA KARYA
        Lokasi_Gudang::create([
            'id' => '1',
            'id_outlet' => '1',
            'gudang' => 'lantai 1',
        ]);

        Lokasi_Gudang::create([
            'id' => '2',
            'id_outlet' => '1',
            'gudang' => 'lantai 2',
        ]);

        Lokasi_Gudang::create([
            'id' => '3',
            'id_outlet' => '1',
            'gudang' => 'lantai 3',
        ]);

        // BINA MARINDAL
        Lokasi_Gudang::create([
            'id' => '4',
            'id_outlet' => '2',
            'gudang' => 'lantai 1',
        ]);

        Lokasi_Gudang::create([
            'id' => '5',
            'id_outlet' => '2',
            'gudang' => 'lantai 2',
        ]);

        Lokasi_Gudang::create([
            'id' => '6',
            'id_outlet' => '2',
            'gudang' => 'lantai 3',
        ]);
    }
}
