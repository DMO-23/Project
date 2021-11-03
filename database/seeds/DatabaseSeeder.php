<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ProveedorSeeder::class);
        $this->call(ProductoSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(AluminioSeeder::class);
        $this->call(HerrajeSeeder::class);
        $this->call(VidrioSeeder::class);
        $this->call(PlasticoSeeder::class);
        $this->call(VinilSeeder::class);
        
    }
}
