<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class users_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
                'name'=>'Joselin Cera',
                'email'=>'joselinvega492@gmail.com',
                'password'=>Hash::make('1234'),
                'nickname'=>'Tohru',
                'img'=>'default.jpg',
                'created_at'=>date('Y-m-d h:m:s')
            ]);
        for($i=0;$i<50;$i++){
            DB::table('users')->insert([
                'name'=>'admin'.$i,
                'email'=>'admin'.$i.'@gmail.com',
                'password'=>Hash::make('1234'),
                'nickname'=>'admin'.$i,
                'img'=>'default.jpg',
                'created_at'=>date('Y-m-d h:m:s')
            ]);
        }
    }
}
