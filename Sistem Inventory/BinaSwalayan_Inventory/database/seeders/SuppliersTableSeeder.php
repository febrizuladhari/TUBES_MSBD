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
            'nama' => 'PT Dayamega Pratama',
        ]);

        //printer
        Supplier::create([
            'nama' => 'PT Dayamega Pratama',
        ]);

        // drawer
        Supplier::create([
            'nama' => 'Panda Retail Solutions',
        ]);

        // printer kasir
        Supplier::create([
            'nama' => 'Supermassive Indonesia',
        ]);

        // printer barcode
        Supplier::create([
            'nama' => 'Barcode Zone',
        ]);

        // kursi
        Supplier::create([
            'nama' => 'PT Wira Utama',
        ]);

        Supplier::create([
            'nama' => 'PX Official Store',
        ]);
        
        Supplier::create([
            'nama' => 'Vanilla Elektronic',
        ]);
        
        Supplier::create([
            'nama' => 'Jona Elektronic',
        ]);
        
        Supplier::create([
            'nama' => 'Surya Computer',
        ]);
        
        
        Supplier::create([
            'nama' => 'Jona Elektronic',
        ]);

        Supplier::create([
            'nama' => 'Abdul Store',
        ]);

        Supplier::create([
            'nama' => 'Hikvision CCTV Medan',
        ]);

        Supplier::create([
            'nama' => 'PT. Multi Kreasi Lestarindo',
        ]);

        Supplier::create([
            'nama' => 'CV. Bintang Mulia Abadi',
        ]);

        Supplier::create([
            'nama' => 'Toko Jaya Win',
        ]);
    }
}
