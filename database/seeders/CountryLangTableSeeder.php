<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountryLangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('country_lang')->delete();
        
        \DB::table('country_lang')->insert(array (
            0 => 
            array (
                'id_country' => 1,
                'name' => 'Alemania',
            ),
            1 => 
            array (
                'id_country' => 2,
                'name' => 'Austria',
            ),
            2 => 
            array (
                'id_country' => 3,
                'name' => 'Bélgica',
            ),
            3 => 
            array (
                'id_country' => 4,
                'name' => 'Canadá',
            ),
            4 => 
            array (
                'id_country' => 5,
                'name' => 'China',
            ),
            5 => 
            array (
                'id_country' => 6,
                'name' => 'España',
            ),
            6 => 
            array (
                'id_country' => 7,
                'name' => 'Finlandia',
            ),
            7 => 
            array (
                'id_country' => 8,
                'name' => 'Francia',
            ),
            8 => 
            array (
                'id_country' => 9,
                'name' => 'Grecia',
            ),
            9 => 
            array (
                'id_country' => 10,
                'name' => 'Italia',
            ),
        ));
        
        
    }
}