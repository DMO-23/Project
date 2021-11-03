<?php

use Illuminate\Database\Seeder;

class VidrioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Entities\Vidrio', 10)->create();
    }
}
