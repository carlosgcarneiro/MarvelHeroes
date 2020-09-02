<?php

use Illuminate\Database\Seeder;

class CharactersTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $comics = \App\Comic::all();
        factory(\App\Character::class,20)
            ->create()
            ->each(function ($character) use($comics){
                $character->comics()->attach($comics->random(4)->pluck('id'));
                $character->save();
            });
    }
}
