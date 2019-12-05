<?php

use Illuminate\Database\Seeder;

class DeviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('devices')->insert([
            'id' => 1,
            'device_type' => 'GPS123',
            'purchase_date' => '2019-02-04',
            'activation_date' => '2019-02-04',
            'deactivation_date' => '2019-10-20',
            'companyId' => 1,
        ]);

        DB::table('devices')->insert([
            'id' => 2,
            'device_type' => 'GPS555',
            'purchase_date' => '2019-02-05',
            'activation_date' => '2019-02-07',
            'deactivation_date' => '2019-10-20',
            'companyId' => 2,
        ]);

        DB::table('devices')->insert([
            'id' => 3,
            'device_type' => 'GPS999',
            'purchase_date' => '2019-02-06',
            'activation_date' => '2019-02-08',
            'deactivation_date' => '2019-12-04',
            'companyId' => 3,
        ]);

        DB::table('devices')->insert([
            'id' => 4,
            'device_type' => 'GPS656',
            'purchase_date' => '2019-10-03',
            'activation_date' => '2019-11-01',
            'deactivation_date' => '2019-12-03',
            'companyId' => 5,
        ]);

        DB::table('devices')->insert([
            'id' => 5,
            'device_type' => 'GPS888',
            'purchase_date' => '2019-11-01',
            'activation_date' => '2019-11-02',
            'deactivation_date' => '2019-12-04',
            'companyId' => 4,
        ]);

        DB::table('devices')->insert([
            'id' => 6,
            'device_type' => 'GPS EX 25',
            'purchase_date' => '2019-11-02',
            'activation_date' => '2019-11-09',
            'deactivation_date' => '2019-12-02',
            'companyId' => 6,
        ]);

        DB::table('devices')->insert([
            'id' => 7,
            'device_type' => 'GPS 1 STa',
            'purchase_date' => '2019-11-05',
            'activation_date' => '2019-11-06',
            'deactivation_date' => '2019-12-04',
            'companyId' => 1,
        ]);


    }
}
