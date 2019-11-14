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
            'type' => 'GPS123',
            'purchase_date' => '2019-02-04',
            'activation_date' => '2019-02-04',
            'deactivation_date' => '2019-10-20',
            'companyId' => 1,
        ]);

        DB::table('devices')->insert([
            'id' => 2,
            'type' => 'GPS555',
            'purchase_date' => '2019-02-04',
            'activation_date' => '2019-02-04',
            'deactivation_date' => '2019-10-20',
            'companyId' => 2,
        ]);

        DB::table('devices')->insert([
            'id' => 3,
            'type' => 'GPS999',
            'purchase_date' => '2019-02-04',
            'activation_date' => '2019-02-04',
            'deactivation_date' => '2019-10-20',
            'companyId' => 3,
        ]);
    }
}
