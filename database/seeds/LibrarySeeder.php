<?php

use Illuminate\Database\Seeder;
use App\Library;
use App\Book;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pl_PL');

        for($i=0; $i < 50; $i++){
            $book = new Book();
            $book->title = $faker->text(rand(8,20));
            $book->author =$faker->name();
            $book->save();



        }
    }
}
