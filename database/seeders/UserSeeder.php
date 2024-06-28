<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'nama_lengkap' => 'Vinna Nurhadina',
            'email' =>'admin@gmail.com',
            'password' => bcrypt('12108822'),
            'role' => 'admin',
        ]);



        User::create([

            'nisn' => '121212',
            'jk' => 'perempuan',
            'nama_lengkap' => 'Angela',
            'asal_sekolah' => 'SMP Yuhuu', 
            'email'=> 'angela@gmail.com',
            'password' => bcrypt('121212'),
            'no_phone' => '0909090909',
            'no_phone_ayah' => '0909090909',
            'no_phone_ibu' => '0909090909',
            'role' => 'user'
        ]);
      
    }
}
