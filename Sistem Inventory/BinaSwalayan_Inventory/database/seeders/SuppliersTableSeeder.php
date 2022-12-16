<?php

namespace Database\Seeders;

use App\Models\Supplier;
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
        // $supplier = [];
        // $faker = Factory::create();

        // for($i = 1; $i <= 10; $i++)
        // {
        // $supplier[] = [
        //     'nama' => $faker->name(),
        // ];
        // }
        // \DB::table('suppliers')->insert($supplier);

        // komputer
        Supplier::create([
            'id' => '1',
            'nama' => 'PT Dayamega Pratama',
        ]);

        //printer
        Supplier::create([
            'id' => '2',
            'nama' => 'PT Dayamega Pratama',
        ]);

        // drawer
        Supplier::create([
            'id' => '3',
            'nama' => 'Panda Retail Solutions',
        ]);

        // printer kasir
        Supplier::create([
            'id' => '4',
            'nama' => 'Supermassive Indonesia',
        ]);

        // printer barcode
        Supplier::create([
            'id' => '5',
            'nama' => 'Barcode Zone',
        ]);

        // kursi
        Supplier::create([
            'id' => '6',
            'nama' => 'PT Wira Utama',
        ]);

        Supplier::create([
            'id' => '7',
            'nama' => 'PX Official Store',
        ]);
        
        Supplier::create([
            'id' => '8',
            'nama' => 'Vanilla Elektronic',
        ]);
        
        Supplier::create([
            'id' => '9',
            'nama' => 'Jona Elektronic',
        ]);
        
        Supplier::create([
            'id' => '10',
            'nama' => 'Surya Computer',
        ]);
        
        
        Supplier::create([
            'id' => '11',
            'nama' => 'Jona Elektronic',
        ]);

        Supplier::create([
            'id' => '13',
            'nama' => 'Hikvision CCTV Medan',
        ]);

        Supplier::create([
            'id' => '14',
            'nama' => 'PT. Multi Kreasi Lestarindo',
        ]);

        Supplier::create([
            'id' => '15',
            'nama' => 'CV. Bintang Mulia Abadi',
        ]);

        Supplier::create([
            'id' => '16',
            'nama' => 'Toko Jaya Win',
        ]);
    }
}
