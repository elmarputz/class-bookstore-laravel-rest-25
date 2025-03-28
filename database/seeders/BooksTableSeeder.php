<?php

namespace Database\Seeders;

use App\Models\Book;
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
        $book = new Book();
        $book->title = 'Star Wars I';
        $book->isbn = '23029380234982034';
        $book->subtitle = 'A new hope';
        $book->rating = 5;
        $book->description = 'aldksjf aldfj asdlfkj alsdfjlasdf';
        $book->published = new DateTime();
        $book->save();

    }
}
