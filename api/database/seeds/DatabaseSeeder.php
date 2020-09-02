<?php

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
        $this->call([
            StoriesTableSeeder::class,
            SeriesTableSeeder::class,
            EventTableSeeder::class,
            ComicsTableSeeder::class,
            CharactersTableSeeder::class,
        ]);
    }
}
