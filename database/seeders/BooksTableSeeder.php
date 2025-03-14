<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'title' => Str::random(50),
            'isbn'  => "234299234098",
            'subtitle' => Str::random(100),
            'rating' => rand(1, 10),
            'description' => Str::random(400),
            'published' => new DateTime(),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        DB::table('books')->insert([
            'title' => Str::random(50),
            'isbn'  => "234895972392823",
            'subtitle' => Str::random(100),
            'rating' => rand(1, 10),
            'description' => Str::random(400),
            'published' => new DateTime(),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
