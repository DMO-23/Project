<?php

use Illuminate\Database\Seeder;

class PlasticoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Entities\Plastico', 30)->create();
    }
}
