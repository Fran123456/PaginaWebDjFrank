<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          factory(App\User::Class,9)->create();

          App\User::create([
        	'name' => 'Francisco Navas',
        	'email'=> 'navasfran98@gmail.com',
        	'password' => bcrypt('paginaazul')
        ]);
    }
}
