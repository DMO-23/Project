<?php

use Illuminate\Database\Seeder;

class HerrajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Entities\Herraje', 10)->create();
    }
}
