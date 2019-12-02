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
            'id' => 1,
            'company_name' => 'Satwork',
            'adress' => 'Bulevar Stepe Stepanovica 132',
            'contact_person' => 'Marko Trtic',
            'phone_number' => '051301213',
        ]);

        DB::table('companies')->insert([
            'id' => 2,
            'company_name' => 'BL Pivara',
            'adress' => 'Slatinska 8',
            'contact_person' => 'Nick Penny',
            'phone_number' => '051350350',
        ]);

        DB::table('companies')->insert([
            'id' => 3,
            'company_name' => 'Vidovic Auto',
            'adress' => 'Bulevar Petra Bojovica',
            'contact_person' => 'Veso Vidovic',
            'phone_number' => '051999999',
        ]);

        DB::table('companies')->insert([
            'id' => 4,
            'company_name' => 'Neco Trade',
            'adress' => 'Kralja Aleksandra I',
            'contact_person' => 'Neco Neco',
            'phone_number' => '065888888',
        ]);

        DB::table('companies')->insert([
            'id' => 5,
            'company_name' => 'Poste RS',
            'adress' => 'Kralja Petra I Karadjordjevica',
            'contact_person' => 'Jasminka Krivokuca',
            'phone_number' => '051246093',
        ]);

        DB::table('companies')->insert([
            'id' => 6,
            'company_name' => 'Euro Express',
            'adress' => 'Jovana Ducica 23',
            'contact_person' => 'Marinko Tomic',
            'phone_number' => '051244300',
        ]);

        DB::table('companies')->insert([
            'id' => 7,
            'company_name' => 'Patrol Taxi',
            'adress' => 'Veljka Mladjenovica',
            'contact_person' => 'Veselko Malbasic',
            'phone_number' => '051229500',
        ]);
    }
}
