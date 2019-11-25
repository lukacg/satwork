<?php

use Illuminate\Database\Seeder;

class DriverTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivers')->insert([
            'id' => 1,
            'driver_name' => 'Vozac 1',
            'phone_number' => '065999888',
            'vehicleId' => 1,
        ]);

        DB::table('drivers')->insert([
            'id' => 2,
            'driver_name' => 'Vozac 20',
            'phone_number' => '065888999',
            'vehicleId' => 2,
        ]);

        DB::table('drivers')->insert([
            'id' => 3,
            'driver_name' => 'Vozac 98',
            'phone_number' => '065898989',
            'vehicleId' => 3,
        ]);
    }
}
