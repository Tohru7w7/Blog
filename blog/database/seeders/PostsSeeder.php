<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('posts')->insert([
                'title'=>'Cómo cuidar las suculentas',
                'description'=>'Aprende a cuidar y como regar',
                'img'=>'default.jpg',
                'content'=>'Contenido del post',
                'likes'=>0,
                'slug'=>'como-cuidar-suculentas',
                'user_id'=>1,
                'category_id'=>1,
                'created_at'=>date('Y-m-d h:m:s')
            ]);
        DB::table('posts')->insert([
                'title'=>'Cactus',
                'description'=>'Aprende a cuidar y como regar',
                'img'=>'default.jpg',
                'content'=>'Contenido del post',
                'likes'=>0,
                'slug'=>'como-cuidar-cactus',
                'user_id'=>2,
                'category_id'=>1,
                'created_at'=>date('Y-m-d h:m:s')
            ]);
    }
}
