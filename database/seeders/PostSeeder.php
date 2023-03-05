<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('posts')->insert([
                'title' => Str::random(10),
                'content' => implode(' ', str_split(Str::random(100), 5)),
                'image' => Str::random(25),
                'likes' => mt_rand(0, 250),
            ]);
        }
    }
}
