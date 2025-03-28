<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Image;
use App\Models\User;
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

        $user = User::first();
        $book->user()->associate($user);


        $book->save();

        $img1 = new Image();
        $img1->title = "Cover 1";
        $img1->url = "https://picsum.photos/400";

        $img2 = new Image();
        $img2->title = "Cover 2";
        $img2->url = "https://picsum.photos/400";

        $book->images()->saveMany([$img1, $img2]);
        // $book->save();

    }
}
