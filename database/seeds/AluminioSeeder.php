<?php

use Illuminate\Database\Seeder;

class AluminioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Entities\Aluminio', 10)->create();
    }
}
