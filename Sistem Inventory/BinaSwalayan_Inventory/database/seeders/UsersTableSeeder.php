<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'id' => '1',
                'nama' => 'Jonathan',
                'username' => 'Jo',
                'password' => bcrypt('Jo23'),
                'level' => 'admin',
                'jenis_Kelamin' => 'P',
                'alamat' => 'Asal',
                'no_Telp' => '0812123123123',
                'id' => '1',
                'id_Outlet' => 'BMS',
            ]
          ]);
          
    }
}
