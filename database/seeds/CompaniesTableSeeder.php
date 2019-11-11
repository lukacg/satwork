<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Satwork',
            'adress' => 'Bulevar Stepe Stepanovica 132',
            'contact_person' => 'Marko Trtic',
            'phone_number' => '051301213',
        ]);

        DB::table('companies')->insert([
            'name' => 'BL Pivara',
            'adress' => 'Slatinska 8',
            'contact_person' => 'Nick Penny',
            'phone_number' => '051350350',
        ]);

        DB::table('companies')->insert([
            'name' => 'Vidovic Auto',
            'adress' => 'Bulevar Petra Bojovica',
            'contact_person' => 'Veso Vidovic',
            'phone_number' => '051999999',
        ]);

        DB::table('companies')->insert([
            'name' => 'Neco Trade',
            'adress' => 'Kralja Aleksandra I',
            'contact_person' => 'Neco Neco',
            'phone_number' => '065888888',
        ]);
    }
}
