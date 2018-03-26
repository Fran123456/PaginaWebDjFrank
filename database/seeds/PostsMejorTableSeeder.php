<?php

use Illuminate\Database\Seeder;

class PostsMejorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\PostMejor::class, 4)->create();
    }
}
