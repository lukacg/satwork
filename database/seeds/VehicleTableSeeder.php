<?php

use Illuminate\Database\Seeder;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicles')->insert([
            'id' => 1,
            'type' => 'Mercedes',
            'model' => 'CLK350',
            'production_year' => '2005',
            'license_plate' => '001-A-001',
            'deviceId' => 1,
        ]);

        DB::table('vehicles')->insert([
            'id' => 2,
            'type' => 'BMW',
            'model' => '750i',
            'production_year' => '2002',
            'license_plate' => '750-M750',
            'deviceId' => 2,
        ]);

        DB::table('vehicles')->insert([
            'id' => 3,
            'type' => 'Volvo',
            'model' => 'FHM20',
            'production_year' => '2015',
            'license_plate' => 'A01A999',
            'deviceId' => 3,
        ]);
    }
}
