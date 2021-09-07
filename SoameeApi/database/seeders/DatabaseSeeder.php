<?php

namespace Database\Seeders;

use Database\Seeders\AuthorsSeeder;
use Database\Seeders\BooksSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $authorsSeed = new AuthorsSeeder();
        $booksSeed = new BooksSeeder();

        $authorsSeed->run();
        $booksSeed->run();
    }
}
