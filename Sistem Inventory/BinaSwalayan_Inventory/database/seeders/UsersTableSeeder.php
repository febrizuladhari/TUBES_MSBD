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
                'nama' => 'Jonathan',
                'username' => 'jonathan',
                'password' => bcrypt('123'),
                'level' => 'superadmin',
                'jenis_Kelamin' => 'P',
                'alamat' => 'Medan',
                'no_Telp' => '0812123123123',
                'id_Outlet' => '1',
            ],
            [
                'nama' => 'Febri',
                'username' => 'febri',
                'password' => bcrypt('123'),
                'level' => 'admin',
                'jenis_Kelamin' => 'P',
                'alamat' => 'Sunggal',
                'no_Telp' => '089812341234',
                'id_Outlet' => '1',
            ],
            [
                'nama' => 'Fairuz',
                'username' => 'fairuz',
                'password' => bcrypt('123'),
                'level' => 'staff',
                'jenis_Kelamin' => 'P',
                'alamat' => 'Binjai',
                'no_Telp' => '085278946547',
                'id_Outlet' => '1',
            ],
        ]);

    }
}
