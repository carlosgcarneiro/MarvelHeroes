<?php

use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $series = \App\Serie::all();
        $events = \App\Event::all();
        factory(\App\Comic::class,10)
            ->create()
            ->each(function ($comic) use($series, $events){
                $comic->events()->attach($events->random(4)->pluck('id'));
                $num = rand(1,3);
                if($num%2==0){
                    $serie = $series->random();
                    $comic->serie_id = $serie->id;
                    $comic->serie()->associate($serie);
                    $comic->save();
                }
            });

    }
}
