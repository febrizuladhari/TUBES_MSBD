<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OutletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('outlets')->insert([
            [
                'nama' => 'Bina Karya Swalayan'
            ],
            [
                'nama' => 'Bina Marindal Swalayan'
            ]
        ]);
    }
}
