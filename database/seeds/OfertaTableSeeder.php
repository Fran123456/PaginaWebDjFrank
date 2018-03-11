<?php

use Illuminate\Database\Seeder;

class OfertaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          factory(App\Oferta::class, 4)->create();
    }
}
