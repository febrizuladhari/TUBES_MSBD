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
                'nama' => 'Operator',
                'username' => 'operator',
                'password' => bcrypt('123'),
                'level' => 'superadmin',
                'jenis_kelamin' => 'P',
                'alamat' => 'Medan',
                'no_telp' => '08129875219',
                'id_outlet' => '1',
            ],
            [
                'nama' => 'Jonathan',
                'username' => 'jonathan',
                'password' => bcrypt('123'),
                'level' => 'superadmin',
                'jenis_kelamin' => 'P',
                'alamat' => 'Medan',
                'no_telp' => '0812123123123',
                'id_outlet' => '1',
            ],
            [
                'nama' => 'Febri',
                'username' => 'febri',
                'password' => bcrypt('123'),
                'level' => 'admin',
                'jenis_kelamin' => 'P',
                'alamat' => 'Sunggal',
                'no_telp' => '089812341234',
                'id_outlet' => '2',
            ],
            [
                'nama' => 'Fairuz',
                'username' => 'fairuz',
                'password' => bcrypt('fairuz'),
                'level' => 'staff',
                'jenis_kelamin' => 'P',
                'alamat' => 'Binjai',
                'no_telp' => '085278946547',
                'id_outlet' => '1',
            ],
        ]);

    }
}
