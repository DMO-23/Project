<?php

use Illuminate\Database\Seeder;

class VinilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Entities\Vinil', 10)->create();
    }
}
