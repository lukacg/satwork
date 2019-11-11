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
            'type' => 'GPS123',
            'purchase_date' => '2019-02-04',
            'activation_date' => '2019-02-04',
            'deactivation_date' => '2019-10-20',
            'companyId' => '',
        ]);

        DB::table('devices')->insert([
            'type' => 'GPS555',
            'purchase_date' => '2019-02-04',
            'activation_date' => '2019-02-04',
            'deactivation_date' => '2019-10-20',
            'companyId' => '',
        ]);

        DB::table('devices')->insert([
            'type' => 'GPS999',
            'purchase_date' => '2019-02-04',
            'activation_date' => '2019-02-04',
            'deactivation_date' => '2019-10-20',
            'companyId' => '',
        ]);
    }
}
