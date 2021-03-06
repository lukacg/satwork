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
        $this->call([
            CompaniesTableSeeder::class,
            DeviceTableSeeder::class,
            VehicleTableSeeder::class,
            DriverTableSeeder::class,
            Device_newTableSeeder::class,
        ]);
    
    }
}
