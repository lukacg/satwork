<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Device_newTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Device_new');

        DB::table('device_new')->insert([
            'x' => $faker -> randomFloat($nbMaxDecimals = 6, $min = 44, $max = 45),
            'y' => $faker -> randomFloat($nbMaxDecimals = 6, $min = 17, $max = 18),
            'time' => $faker->dateTime($min = 'yesterday', $max = 'now'),
            'deviceId' => 1,
        ]);

        DB::table('device_new')->insert([
            'x' => $faker -> randomFloat($nbMaxDecimals = 6, $min = 44, $max = 45),
            'y' => $faker -> randomFloat($nbMaxDecimals = 6, $min = 17, $max = 18),
            'time' => $faker->dateTime($min = 'yesterday', $max = 'now'),
            'deviceId' => 2,
        ]);

        DB::table('device_new')->insert([
            'x' => $faker -> randomFloat($nbMaxDecimals = 6, $min = 44, $max = 45),
            'y' => $faker -> randomFloat($nbMaxDecimals = 6, $min = 17, $max = 18),
            'time' => $faker->dateTime($min = 'yesterday', $max = 'now'),
            'deviceId' => 3,
        ]);
    }
}
