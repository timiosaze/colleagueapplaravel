<?php

use Illuminate\Database\Seeder;

class ColleagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class, 1)->create()->each(function ($user) {
            $user->colleagues()->saveMany(factory(App\Colleague::class, 10)->make());
        });
    }
}
