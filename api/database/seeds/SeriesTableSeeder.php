<?php

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $stories = \App\Story::all();
        factory(\App\Serie::class,6)
            ->create()
            ->each(function ($serie) use($stories){
                $story = $stories->random();
                $serie->story_id = $story->id;
                $serie->story()->associate($story);
                $serie->save();
            });
    }
}
