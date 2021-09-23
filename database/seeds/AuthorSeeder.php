<?php

use Illuminate\Database\Seeder;
use App\Author;
use Faker\Generator as Faker;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {
            // creo gli authori
            $author = new Author();

            $author->name = $faker->words(1, true);
            $author->surname = $faker->words(1, true);
            $author->save();
            }
      

    }
}
