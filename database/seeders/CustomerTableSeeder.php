<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer')->delete();
        
        \DB::table('customer')->insert(array (
            0 => 
            array (
                'firstname' => 'Fastacar',
                'id_customer' => 1,
                'lastname' => 'Buck',
            ),
            1 => 
            array (
                'firstname' => 'ANGEL',
                'id_customer' => 2,
                'lastname' => 'Bairn',
            ),
            2 => 
            array (
                'firstname' => 'Mary',
                'id_customer' => 3,
                'lastname' => 'Green',
            ),
            3 => 
            array (
                'firstname' => 'Mary',
                'id_customer' => 4,
                'lastname' => 'Gardner',
            ),
            4 => 
            array (
                'firstname' => 'Ligo',
                'id_customer' => 5,
                'lastname' => 'Green',
            ),
            5 => 
            array (
                'firstname' => 'Samhan',
                'id_customer' => 6,
                'lastname' => 'Bairn',
            ),
            6 => 
            array (
                'firstname' => 'Holbin',
                'id_customer' => 7,
                'lastname' => 'Weed',
            ),
            7 => 
            array (
                'firstname' => 'Golgo',
                'id_customer' => 8,
                'lastname' => 'Weed',
            ),
            8 => 
            array (
                'firstname' => 'Fastacar',
                'id_customer' => 9,
                'lastname' => 'Green',
            ),
            9 => 
            array (
                'firstname' => 'Andbella',
                'id_customer' => 10,
                'lastname' => 'Foot',
            ),
            10 => 
            array (
                'firstname' => 'Macdon',
                'id_customer' => 11,
                'lastname' => 'Chubb',
            ),
            11 => 
            array (
                'firstname' => 'Mary',
                'id_customer' => 12,
                'lastname' => 'Foot',
            ),
            12 => 
            array (
                'firstname' => 'Wisegrim',
                'id_customer' => 13,
                'lastname' => 'Foot',
            ),
            13 => 
            array (
                'firstname' => 'Holbin',
                'id_customer' => 14,
                'lastname' => 'Green',
            ),
            14 => 
            array (
                'firstname' => 'Mibe',
                'id_customer' => 15,
                'lastname' => 'Green',
            ),
            15 => 
            array (
                'firstname' => 'Byding',
                'id_customer' => 16,
                'lastname' => 'Gamwich',
            ),
            16 => 
            array (
                'firstname' => 'Holbin',
                'id_customer' => 17,
                'lastname' => 'Brace',
            ),
            17 => 
            array (
                'firstname' => 'Andbella',
                'id_customer' => 18,
                'lastname' => 'Weed',
            ),
            18 => 
            array (
                'firstname' => 'Fastacar',
                'id_customer' => 19,
                'lastname' => 'Feet',
            ),
            19 => 
            array (
                'firstname' => 'Ligo',
                'id_customer' => 20,
                'lastname' => 'Girdle',
            ),
            20 => 
            array (
                'firstname' => 'Rocdo',
                'id_customer' => 21,
                'lastname' => 'Green',
            ),
            21 => 
            array (
                'firstname' => 'Andbella',
                'id_customer' => 22,
                'lastname' => 'Chubb',
            ),
            22 => 
            array (
                'firstname' => 'Mary',
                'id_customer' => 23,
                'lastname' => 'Brace',
            ),
            23 => 
            array (
                'firstname' => 'Wisegrim',
                'id_customer' => 24,
                'lastname' => 'Sack',
            ),
            24 => 
            array (
                'firstname' => 'Fastacar',
                'id_customer' => 25,
                'lastname' => 'Hand',
            ),
            25 => 
            array (
                'firstname' => 'Rocdo',
                'id_customer' => 26,
                'lastname' => 'Foot',
            ),
            26 => 
            array (
                'firstname' => 'Golgo',
                'id_customer' => 27,
                'lastname' => 'Bairn',
            ),
            27 => 
            array (
                'firstname' => 'Mibe',
                'id_customer' => 28,
                'lastname' => 'Sack',
            ),
            28 => 
            array (
                'firstname' => 'Rocdo',
                'id_customer' => 29,
                'lastname' => 'Weed',
            ),
            29 => 
            array (
                'firstname' => 'Samhan',
                'id_customer' => 30,
                'lastname' => 'Girdle',
            ),
            30 => 
            array (
                'firstname' => 'Mibe',
                'id_customer' => 31,
                'lastname' => 'Green',
            ),
            31 => 
            array (
                'firstname' => 'Dipo',
                'id_customer' => 32,
                'lastname' => 'Feet',
            ),
            32 => 
            array (
                'firstname' => 'Fihil',
                'id_customer' => 33,
                'lastname' => 'Green',
            ),
            33 => 
            array (
                'firstname' => 'Adehil',
                'id_customer' => 34,
                'lastname' => 'Gamwich',
            ),
            34 => 
            array (
                'firstname' => 'Macdon',
                'id_customer' => 35,
                'lastname' => 'Green',
            ),
            35 => 
            array (
                'firstname' => 'Dipo',
                'id_customer' => 36,
                'lastname' => 'Girdle',
            ),
            36 => 
            array (
                'firstname' => 'Dipo',
                'id_customer' => 37,
                'lastname' => 'Feet',
            ),
            37 => 
            array (
                'firstname' => 'Macdon',
                'id_customer' => 38,
                'lastname' => 'Sack',
            ),
            38 => 
            array (
                'firstname' => 'Dadic',
                'id_customer' => 39,
                'lastname' => 'Girdle',
            ),
            39 => 
            array (
                'firstname' => 'Fastacar',
                'id_customer' => 40,
                'lastname' => 'Gardner',
            ),
            40 => 
            array (
                'firstname' => 'Agolda',
                'id_customer' => 41,
                'lastname' => 'Foot',
            ),
            41 => 
            array (
                'firstname' => 'Dipo',
                'id_customer' => 42,
                'lastname' => 'Baggins',
            ),
            42 => 
            array (
                'firstname' => 'Agolda',
                'id_customer' => 43,
                'lastname' => 'Feet',
            ),
            43 => 
            array (
                'firstname' => 'Ligo',
                'id_customer' => 44,
                'lastname' => 'Hand',
            ),
            44 => 
            array (
                'firstname' => 'Agolda',
                'id_customer' => 45,
                'lastname' => 'Gamwich',
            ),
            45 => 
            array (
                'firstname' => 'Fastacar',
                'id_customer' => 46,
                'lastname' => 'Gamwich',
            ),
            46 => 
            array (
                'firstname' => 'Dipo',
                'id_customer' => 47,
                'lastname' => 'Hand',
            ),
            47 => 
            array (
                'firstname' => 'Ligo',
                'id_customer' => 48,
                'lastname' => 'Pipe',
            ),
            48 => 
            array (
                'firstname' => 'Fihil',
                'id_customer' => 49,
                'lastname' => 'Weed',
            ),
            49 => 
            array (
                'firstname' => 'Dadic',
                'id_customer' => 50,
                'lastname' => 'Bairn',
            ),
            50 => 
            array (
                'firstname' => 'Fastacar',
                'id_customer' => 51,
                'lastname' => 'Baggins',
            ),
            51 => 
            array (
                'firstname' => 'Holbin',
                'id_customer' => 52,
                'lastname' => 'Buck',
            ),
            52 => 
            array (
                'firstname' => 'Mundlo',
                'id_customer' => 53,
                'lastname' => 'Girdle',
            ),
            53 => 
            array (
                'firstname' => 'Fihil',
                'id_customer' => 54,
                'lastname' => 'Green',
            ),
            54 => 
            array (
                'firstname' => 'ANGEL',
                'id_customer' => 55,
                'lastname' => 'Feet',
            ),
            55 => 
            array (
                'firstname' => 'Dipo',
                'id_customer' => 56,
                'lastname' => 'Bottom',
            ),
            56 => 
            array (
                'firstname' => 'Holbin',
                'id_customer' => 57,
                'lastname' => 'Bottom',
            ),
            57 => 
            array (
                'firstname' => 'Gardadoc',
                'id_customer' => 58,
                'lastname' => 'Girdle',
            ),
            58 => 
            array (
                'firstname' => 'Macdon',
                'id_customer' => 59,
                'lastname' => 'Buck',
            ),
            59 => 
            array (
                'firstname' => 'Wisegrim',
                'id_customer' => 60,
                'lastname' => 'Feet',
            ),
            60 => 
            array (
                'firstname' => 'Andbella',
                'id_customer' => 61,
                'lastname' => 'Green',
            ),
            61 => 
            array (
                'firstname' => 'Macdon',
                'id_customer' => 62,
                'lastname' => 'Bairn',
            ),
            62 => 
            array (
                'firstname' => 'ANGEL',
                'id_customer' => 63,
                'lastname' => 'Chubb',
            ),
            63 => 
            array (
                'firstname' => 'Ligo',
                'id_customer' => 64,
                'lastname' => 'Baggins',
            ),
            64 => 
            array (
                'firstname' => 'Dipo',
                'id_customer' => 65,
                'lastname' => 'Bottom',
            ),
            65 => 
            array (
                'firstname' => 'Adehil',
                'id_customer' => 66,
                'lastname' => 'Chubb',
            ),
            66 => 
            array (
                'firstname' => 'Dadic',
                'id_customer' => 67,
                'lastname' => 'Girdle',
            ),
            67 => 
            array (
                'firstname' => 'Andbella',
                'id_customer' => 68,
                'lastname' => 'Baggins',
            ),
            68 => 
            array (
                'firstname' => 'Wisegrim',
                'id_customer' => 69,
                'lastname' => 'Brace',
            ),
            69 => 
            array (
                'firstname' => 'Agolda',
                'id_customer' => 70,
                'lastname' => 'Baggins',
            ),
            70 => 
            array (
                'firstname' => 'Gardadoc',
                'id_customer' => 71,
                'lastname' => 'Pipe',
            ),
            71 => 
            array (
                'firstname' => 'Mibe',
                'id_customer' => 72,
                'lastname' => 'Buck',
            ),
            72 => 
            array (
                'firstname' => 'Samhan',
                'id_customer' => 73,
                'lastname' => 'Buck',
            ),
            73 => 
            array (
                'firstname' => 'Mary',
                'id_customer' => 74,
                'lastname' => 'Brace',
            ),
            74 => 
            array (
                'firstname' => 'Ligo',
                'id_customer' => 75,
                'lastname' => 'Pipe',
            ),
            75 => 
            array (
                'firstname' => 'Mibe',
                'id_customer' => 76,
                'lastname' => 'Buck',
            ),
            76 => 
            array (
                'firstname' => 'ANGEL',
                'id_customer' => 77,
                'lastname' => 'Bottom',
            ),
            77 => 
            array (
                'firstname' => 'Macdon',
                'id_customer' => 78,
                'lastname' => 'Weed',
            ),
            78 => 
            array (
                'firstname' => 'Dadic',
                'id_customer' => 79,
                'lastname' => 'Bottom',
            ),
            79 => 
            array (
                'firstname' => 'Samhan',
                'id_customer' => 80,
                'lastname' => 'Foot',
            ),
            80 => 
            array (
                'firstname' => 'Fastacar',
                'id_customer' => 81,
                'lastname' => 'Hand',
            ),
            81 => 
            array (
                'firstname' => 'Wisegrim',
                'id_customer' => 82,
                'lastname' => 'Baggins',
            ),
            82 => 
            array (
                'firstname' => 'ANGEL',
                'id_customer' => 83,
                'lastname' => 'Bottom',
            ),
            83 => 
            array (
                'firstname' => 'ANGEL',
                'id_customer' => 84,
                'lastname' => 'Foot',
            ),
            84 => 
            array (
                'firstname' => 'Mibe',
                'id_customer' => 85,
                'lastname' => 'Bottom',
            ),
            85 => 
            array (
                'firstname' => 'Dadic',
                'id_customer' => 86,
                'lastname' => 'Buck',
            ),
            86 => 
            array (
                'firstname' => 'Holbin',
                'id_customer' => 87,
                'lastname' => 'Baggins',
            ),
            87 => 
            array (
                'firstname' => 'Gardadoc',
                'id_customer' => 88,
                'lastname' => 'Bairn',
            ),
            88 => 
            array (
                'firstname' => 'Fastacar',
                'id_customer' => 89,
                'lastname' => 'Baggins',
            ),
            89 => 
            array (
                'firstname' => 'ANGEL',
                'id_customer' => 90,
                'lastname' => 'Bottom',
            ),
            90 => 
            array (
                'firstname' => 'ANGEL',
                'id_customer' => 91,
                'lastname' => 'Girdle',
            ),
            91 => 
            array (
                'firstname' => 'Fastacar',
                'id_customer' => 92,
                'lastname' => 'Green',
            ),
            92 => 
            array (
                'firstname' => 'ANGEL',
                'id_customer' => 93,
                'lastname' => 'Green',
            ),
            93 => 
            array (
                'firstname' => 'Mundlo',
                'id_customer' => 94,
                'lastname' => 'Sack',
            ),
            94 => 
            array (
                'firstname' => 'Macdon',
                'id_customer' => 95,
                'lastname' => 'Girdle',
            ),
            95 => 
            array (
                'firstname' => 'Dadic',
                'id_customer' => 96,
                'lastname' => 'Baggins',
            ),
            96 => 
            array (
                'firstname' => 'Mibe',
                'id_customer' => 97,
                'lastname' => 'Foot',
            ),
            97 => 
            array (
                'firstname' => 'Andbella',
                'id_customer' => 98,
                'lastname' => 'Green',
            ),
            98 => 
            array (
                'firstname' => 'Mundlo',
                'id_customer' => 99,
                'lastname' => 'Green',
            ),
            99 => 
            array (
                'firstname' => 'Dipo',
                'id_customer' => 100,
                'lastname' => 'Girdle',
            ),
        ));
        
        
    }
}