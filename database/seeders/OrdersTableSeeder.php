<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'current_state' => 6,
                'date_add' => '2021-03-27 05:19:01',
                'id_address_delivery' => 1,
                'id_customer' => 1,
                'id_order' => 1,
                'reference' => '656654',
                'total_paid' => '45.000000',
            ),
            1 => 
            array (
                'current_state' => 7,
                'date_add' => '2021-03-27 10:14:06',
                'id_address_delivery' => 2,
                'id_customer' => 2,
                'id_order' => 2,
                'reference' => '646772',
                'total_paid' => '12.000000',
            ),
            2 => 
            array (
                'current_state' => 4,
                'date_add' => '2021-03-26 19:14:28',
                'id_address_delivery' => 3,
                'id_customer' => 3,
                'id_order' => 3,
                'reference' => '644121',
                'total_paid' => '32.000000',
            ),
            3 => 
            array (
                'current_state' => 4,
                'date_add' => '2021-03-27 11:52:29',
                'id_address_delivery' => 4,
                'id_customer' => 4,
                'id_order' => 4,
                'reference' => '23939',
                'total_paid' => '27.000000',
            ),
            4 => 
            array (
                'current_state' => 5,
                'date_add' => '2021-03-27 13:59:33',
                'id_address_delivery' => 5,
                'id_customer' => 5,
                'id_order' => 5,
                'reference' => '566427',
                'total_paid' => '51.000000',
            ),
            5 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 07:39:38',
                'id_address_delivery' => 6,
                'id_customer' => 6,
                'id_order' => 6,
                'reference' => '329283',
                'total_paid' => '34.000000',
            ),
            6 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-26 17:30:24',
                'id_address_delivery' => 7,
                'id_customer' => 7,
                'id_order' => 7,
                'reference' => '494931',
                'total_paid' => '46.000000',
            ),
            7 => 
            array (
                'current_state' => 8,
                'date_add' => '2021-03-26 23:14:43',
                'id_address_delivery' => 8,
                'id_customer' => 8,
                'id_order' => 8,
                'reference' => '230139',
                'total_paid' => '7.000000',
            ),
            8 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-26 22:58:34',
                'id_address_delivery' => 9,
                'id_customer' => 9,
                'id_order' => 9,
                'reference' => '519482',
                'total_paid' => '21.000000',
            ),
            9 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 07:33:06',
                'id_address_delivery' => 10,
                'id_customer' => 10,
                'id_order' => 10,
                'reference' => '89515',
                'total_paid' => '103.000000',
            ),
            10 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 01:58:14',
                'id_address_delivery' => 11,
                'id_customer' => 11,
                'id_order' => 11,
                'reference' => '466810',
                'total_paid' => '76.000000',
            ),
            11 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 06:04:43',
                'id_address_delivery' => 12,
                'id_customer' => 12,
                'id_order' => 12,
                'reference' => '125373',
                'total_paid' => '61.000000',
            ),
            12 => 
            array (
                'current_state' => 5,
                'date_add' => '2021-03-27 05:22:46',
                'id_address_delivery' => 13,
                'id_customer' => 13,
                'id_order' => 13,
                'reference' => '379112',
                'total_paid' => '43.000000',
            ),
            13 => 
            array (
                'current_state' => 5,
                'date_add' => '2021-03-26 15:52:38',
                'id_address_delivery' => 14,
                'id_customer' => 14,
                'id_order' => 14,
                'reference' => '724963',
                'total_paid' => '31.000000',
            ),
            14 => 
            array (
                'current_state' => 7,
                'date_add' => '2021-03-26 21:58:37',
                'id_address_delivery' => 15,
                'id_customer' => 15,
                'id_order' => 15,
                'reference' => '307501',
                'total_paid' => '84.000000',
            ),
            15 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 12:20:17',
                'id_address_delivery' => 16,
                'id_customer' => 16,
                'id_order' => 16,
                'reference' => '64164',
                'total_paid' => '3.000000',
            ),
            16 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 08:43:52',
                'id_address_delivery' => 17,
                'id_customer' => 17,
                'id_order' => 17,
                'reference' => '362752',
                'total_paid' => '47.000000',
            ),
            17 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 06:30:31',
                'id_address_delivery' => 18,
                'id_customer' => 18,
                'id_order' => 18,
                'reference' => '356391',
                'total_paid' => '71.000000',
            ),
            18 => 
            array (
                'current_state' => 8,
                'date_add' => '2021-03-27 04:49:22',
                'id_address_delivery' => 19,
                'id_customer' => 19,
                'id_order' => 19,
                'reference' => '194560',
                'total_paid' => '52.000000',
            ),
            19 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 02:17:16',
                'id_address_delivery' => 20,
                'id_customer' => 20,
                'id_order' => 20,
                'reference' => '372501',
                'total_paid' => '17.000000',
            ),
            20 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 08:48:47',
                'id_address_delivery' => 21,
                'id_customer' => 21,
                'id_order' => 21,
                'reference' => '827091',
                'total_paid' => '74.000000',
            ),
            21 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 01:35:28',
                'id_address_delivery' => 22,
                'id_customer' => 22,
                'id_order' => 22,
                'reference' => '553659',
                'total_paid' => '57.000000',
            ),
            22 => 
            array (
                'current_state' => 7,
                'date_add' => '2021-03-27 03:52:38',
                'id_address_delivery' => 23,
                'id_customer' => 23,
                'id_order' => 23,
                'reference' => '552218',
                'total_paid' => '26.000000',
            ),
            23 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 18:43:12',
                'id_address_delivery' => 24,
                'id_customer' => 24,
                'id_order' => 24,
                'reference' => '871186',
                'total_paid' => '6.000000',
            ),
            24 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 20:07:06',
                'id_address_delivery' => 25,
                'id_customer' => 25,
                'id_order' => 25,
                'reference' => '589339',
                'total_paid' => '12.000000',
            ),
            25 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 12:02:29',
                'id_address_delivery' => 26,
                'id_customer' => 26,
                'id_order' => 26,
                'reference' => '687725',
                'total_paid' => '81.000000',
            ),
            26 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 22:50:53',
                'id_address_delivery' => 27,
                'id_customer' => 27,
                'id_order' => 27,
                'reference' => '73843',
                'total_paid' => '40.000000',
            ),
            27 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 21:00:37',
                'id_address_delivery' => 28,
                'id_customer' => 28,
                'id_order' => 28,
                'reference' => '467757',
                'total_paid' => '80.000000',
            ),
            28 => 
            array (
                'current_state' => 1,
                'date_add' => '2021-03-27 12:19:34',
                'id_address_delivery' => 29,
                'id_customer' => 29,
                'id_order' => 29,
                'reference' => '886805',
                'total_paid' => '63.000000',
            ),
            29 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 09:49:22',
                'id_address_delivery' => 30,
                'id_customer' => 30,
                'id_order' => 30,
                'reference' => '595084',
                'total_paid' => '33.000000',
            ),
            30 => 
            array (
                'current_state' => 7,
                'date_add' => '2021-03-27 11:52:57',
                'id_address_delivery' => 31,
                'id_customer' => 31,
                'id_order' => 31,
                'reference' => '32978',
                'total_paid' => '13.000000',
            ),
            31 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 10:20:03',
                'id_address_delivery' => 32,
                'id_customer' => 32,
                'id_order' => 32,
                'reference' => '36010',
                'total_paid' => '81.000000',
            ),
            32 => 
            array (
                'current_state' => 1,
                'date_add' => '2021-03-27 09:58:53',
                'id_address_delivery' => 33,
                'id_customer' => 33,
                'id_order' => 33,
                'reference' => '656708',
                'total_paid' => '39.000000',
            ),
            33 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 09:46:00',
                'id_address_delivery' => 34,
                'id_customer' => 34,
                'id_order' => 34,
                'reference' => '782327',
                'total_paid' => '80.000000',
            ),
            34 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 18:39:27',
                'id_address_delivery' => 35,
                'id_customer' => 35,
                'id_order' => 35,
                'reference' => '575470',
                'total_paid' => '27.000000',
            ),
            35 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 08:59:36',
                'id_address_delivery' => 36,
                'id_customer' => 36,
                'id_order' => 36,
                'reference' => '45565',
                'total_paid' => '18.000000',
            ),
            36 => 
            array (
                'current_state' => 8,
                'date_add' => '2021-03-27 09:41:33',
                'id_address_delivery' => 37,
                'id_customer' => 37,
                'id_order' => 37,
                'reference' => '256955',
                'total_paid' => '35.000000',
            ),
            37 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 05:34:08',
                'id_address_delivery' => 38,
                'id_customer' => 38,
                'id_order' => 38,
                'reference' => '824479',
                'total_paid' => '8.000000',
            ),
            38 => 
            array (
                'current_state' => 8,
                'date_add' => '2021-03-26 17:04:49',
                'id_address_delivery' => 39,
                'id_customer' => 39,
                'id_order' => 39,
                'reference' => '777774',
                'total_paid' => '44.000000',
            ),
            39 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 22:37:40',
                'id_address_delivery' => 40,
                'id_customer' => 40,
                'id_order' => 40,
                'reference' => '201692',
                'total_paid' => '20.000000',
            ),
            40 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 07:47:46',
                'id_address_delivery' => 41,
                'id_customer' => 41,
                'id_order' => 41,
                'reference' => '52294',
                'total_paid' => '100.000000',
            ),
            41 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 15:03:46',
                'id_address_delivery' => 42,
                'id_customer' => 42,
                'id_order' => 42,
                'reference' => '565581',
                'total_paid' => '64.000000',
            ),
            42 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 09:36:31',
                'id_address_delivery' => 43,
                'id_customer' => 43,
                'id_order' => 43,
                'reference' => '191912',
                'total_paid' => '72.000000',
            ),
            43 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 14:38:51',
                'id_address_delivery' => 44,
                'id_customer' => 44,
                'id_order' => 44,
                'reference' => '744891',
                'total_paid' => '82.000000',
            ),
            44 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 12:29:34',
                'id_address_delivery' => 45,
                'id_customer' => 45,
                'id_order' => 45,
                'reference' => '524838',
                'total_paid' => '44.000000',
            ),
            45 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 01:50:40',
                'id_address_delivery' => 46,
                'id_customer' => 46,
                'id_order' => 46,
                'reference' => '237892',
                'total_paid' => '70.000000',
            ),
            46 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 11:07:43',
                'id_address_delivery' => 47,
                'id_customer' => 47,
                'id_order' => 47,
                'reference' => '244277',
                'total_paid' => '67.000000',
            ),
            47 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 20:58:56',
                'id_address_delivery' => 48,
                'id_customer' => 48,
                'id_order' => 48,
                'reference' => '278314',
                'total_paid' => '78.000000',
            ),
            48 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 10:51:08',
                'id_address_delivery' => 49,
                'id_customer' => 49,
                'id_order' => 49,
                'reference' => '42701',
                'total_paid' => '49.000000',
            ),
            49 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 02:53:50',
                'id_address_delivery' => 50,
                'id_customer' => 50,
                'id_order' => 50,
                'reference' => '686822',
                'total_paid' => '18.000000',
            ),
            50 => 
            array (
                'current_state' => 7,
                'date_add' => '2021-03-26 18:45:41',
                'id_address_delivery' => 51,
                'id_customer' => 51,
                'id_order' => 51,
                'reference' => '20036',
                'total_paid' => '81.000000',
            ),
            51 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 07:16:45',
                'id_address_delivery' => 52,
                'id_customer' => 52,
                'id_order' => 52,
                'reference' => '432765',
                'total_paid' => '28.000000',
            ),
            52 => 
            array (
                'current_state' => 4,
                'date_add' => '2021-03-27 00:02:09',
                'id_address_delivery' => 53,
                'id_customer' => 53,
                'id_order' => 53,
                'reference' => '570438',
                'total_paid' => '58.000000',
            ),
            53 => 
            array (
                'current_state' => 8,
                'date_add' => '2021-03-27 02:15:28',
                'id_address_delivery' => 54,
                'id_customer' => 54,
                'id_order' => 54,
                'reference' => '233742',
                'total_paid' => '51.000000',
            ),
            54 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 23:55:48',
                'id_address_delivery' => 55,
                'id_customer' => 55,
                'id_order' => 55,
                'reference' => '818995',
                'total_paid' => '96.000000',
            ),
            55 => 
            array (
                'current_state' => 7,
                'date_add' => '2021-03-27 10:28:11',
                'id_address_delivery' => 56,
                'id_customer' => 56,
                'id_order' => 56,
                'reference' => '107877',
                'total_paid' => '34.000000',
            ),
            56 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 18:23:13',
                'id_address_delivery' => 57,
                'id_customer' => 57,
                'id_order' => 57,
                'reference' => '102423',
                'total_paid' => '79.000000',
            ),
            57 => 
            array (
                'current_state' => 1,
                'date_add' => '2021-03-26 15:05:37',
                'id_address_delivery' => 58,
                'id_customer' => 58,
                'id_order' => 58,
                'reference' => '415120',
                'total_paid' => '43.000000',
            ),
            58 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 01:34:44',
                'id_address_delivery' => 59,
                'id_customer' => 59,
                'id_order' => 59,
                'reference' => '746179',
                'total_paid' => '88.000000',
            ),
            59 => 
            array (
                'current_state' => 5,
                'date_add' => '2021-03-26 19:33:35',
                'id_address_delivery' => 60,
                'id_customer' => 60,
                'id_order' => 60,
                'reference' => '629388',
                'total_paid' => '55.000000',
            ),
            60 => 
            array (
                'current_state' => 6,
                'date_add' => '2021-03-26 17:23:14',
                'id_address_delivery' => 61,
                'id_customer' => 61,
                'id_order' => 61,
                'reference' => '358661',
                'total_paid' => '16.000000',
            ),
            61 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 03:38:50',
                'id_address_delivery' => 62,
                'id_customer' => 62,
                'id_order' => 62,
                'reference' => '84017',
                'total_paid' => '80.000000',
            ),
            62 => 
            array (
                'current_state' => 1,
                'date_add' => '2021-03-26 16:56:08',
                'id_address_delivery' => 63,
                'id_customer' => 63,
                'id_order' => 63,
                'reference' => '326104',
                'total_paid' => '45.000000',
            ),
            63 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 12:02:31',
                'id_address_delivery' => 64,
                'id_customer' => 64,
                'id_order' => 64,
                'reference' => '142665',
                'total_paid' => '30.000000',
            ),
            64 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 05:04:46',
                'id_address_delivery' => 65,
                'id_customer' => 65,
                'id_order' => 65,
                'reference' => '519952',
                'total_paid' => '7.000000',
            ),
            65 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 20:31:40',
                'id_address_delivery' => 66,
                'id_customer' => 66,
                'id_order' => 66,
                'reference' => '706780',
                'total_paid' => '19.000000',
            ),
            66 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 18:26:16',
                'id_address_delivery' => 67,
                'id_customer' => 67,
                'id_order' => 67,
                'reference' => '596722',
                'total_paid' => '96.000000',
            ),
            67 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 21:57:22',
                'id_address_delivery' => 68,
                'id_customer' => 68,
                'id_order' => 68,
                'reference' => '862583',
                'total_paid' => '10.000000',
            ),
            68 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 07:22:50',
                'id_address_delivery' => 69,
                'id_customer' => 69,
                'id_order' => 69,
                'reference' => '195750',
                'total_paid' => '16.000000',
            ),
            69 => 
            array (
                'current_state' => 7,
                'date_add' => '2021-03-26 21:30:52',
                'id_address_delivery' => 70,
                'id_customer' => 70,
                'id_order' => 70,
                'reference' => '12114',
                'total_paid' => '63.000000',
            ),
            70 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 02:39:02',
                'id_address_delivery' => 71,
                'id_customer' => 71,
                'id_order' => 71,
                'reference' => '522958',
                'total_paid' => '35.000000',
            ),
            71 => 
            array (
                'current_state' => 8,
                'date_add' => '2021-03-26 15:54:49',
                'id_address_delivery' => 72,
                'id_customer' => 72,
                'id_order' => 72,
                'reference' => '419821',
                'total_paid' => '20.000000',
            ),
            72 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 18:47:55',
                'id_address_delivery' => 73,
                'id_customer' => 73,
                'id_order' => 73,
                'reference' => '601551',
                'total_paid' => '15.000000',
            ),
            73 => 
            array (
                'current_state' => 8,
                'date_add' => '2021-03-26 19:22:23',
                'id_address_delivery' => 74,
                'id_customer' => 74,
                'id_order' => 74,
                'reference' => '382663',
                'total_paid' => '84.000000',
            ),
            74 => 
            array (
                'current_state' => 5,
                'date_add' => '2021-03-26 21:39:00',
                'id_address_delivery' => 75,
                'id_customer' => 75,
                'id_order' => 75,
                'reference' => '473762',
                'total_paid' => '100.000000',
            ),
            75 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 00:30:23',
                'id_address_delivery' => 76,
                'id_customer' => 76,
                'id_order' => 76,
                'reference' => '478451',
                'total_paid' => '22.000000',
            ),
            76 => 
            array (
                'current_state' => 1,
                'date_add' => '2021-03-27 12:19:38',
                'id_address_delivery' => 77,
                'id_customer' => 77,
                'id_order' => 77,
                'reference' => '368506',
                'total_paid' => '62.000000',
            ),
            77 => 
            array (
                'current_state' => 4,
                'date_add' => '2021-03-27 01:58:50',
                'id_address_delivery' => 78,
                'id_customer' => 78,
                'id_order' => 78,
                'reference' => '616137',
                'total_paid' => '58.000000',
            ),
            78 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 12:14:11',
                'id_address_delivery' => 79,
                'id_customer' => 79,
                'id_order' => 79,
                'reference' => '589104',
                'total_paid' => '13.000000',
            ),
            79 => 
            array (
                'current_state' => 7,
                'date_add' => '2021-03-27 13:42:19',
                'id_address_delivery' => 80,
                'id_customer' => 80,
                'id_order' => 80,
                'reference' => '95430',
                'total_paid' => '17.000000',
            ),
            80 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 00:09:07',
                'id_address_delivery' => 81,
                'id_customer' => 81,
                'id_order' => 81,
                'reference' => '273378',
                'total_paid' => '14.000000',
            ),
            81 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 04:06:38',
                'id_address_delivery' => 82,
                'id_customer' => 82,
                'id_order' => 82,
                'reference' => '486840',
                'total_paid' => '23.000000',
            ),
            82 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 16:35:37',
                'id_address_delivery' => 83,
                'id_customer' => 83,
                'id_order' => 83,
                'reference' => '103313',
                'total_paid' => '36.000000',
            ),
            83 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 19:14:36',
                'id_address_delivery' => 84,
                'id_customer' => 84,
                'id_order' => 84,
                'reference' => '306187',
                'total_paid' => '72.000000',
            ),
            84 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 05:51:01',
                'id_address_delivery' => 85,
                'id_customer' => 85,
                'id_order' => 85,
                'reference' => '742817',
                'total_paid' => '9.000000',
            ),
            85 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 07:20:06',
                'id_address_delivery' => 86,
                'id_customer' => 86,
                'id_order' => 86,
                'reference' => '808060',
                'total_paid' => '91.000000',
            ),
            86 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 03:58:26',
                'id_address_delivery' => 87,
                'id_customer' => 87,
                'id_order' => 87,
                'reference' => '717851',
                'total_paid' => '17.000000',
            ),
            87 => 
            array (
                'current_state' => 7,
                'date_add' => '2021-03-27 13:19:04',
                'id_address_delivery' => 88,
                'id_customer' => 88,
                'id_order' => 88,
                'reference' => '249445',
                'total_paid' => '35.000000',
            ),
            88 => 
            array (
                'current_state' => 6,
                'date_add' => '2021-03-26 20:29:02',
                'id_address_delivery' => 89,
                'id_customer' => 89,
                'id_order' => 89,
                'reference' => '604258',
                'total_paid' => '59.000000',
            ),
            89 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 15:45:04',
                'id_address_delivery' => 90,
                'id_customer' => 90,
                'id_order' => 90,
                'reference' => '443213',
                'total_paid' => '67.000000',
            ),
            90 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 05:37:42',
                'id_address_delivery' => 91,
                'id_customer' => 91,
                'id_order' => 91,
                'reference' => '237567',
                'total_paid' => '71.000000',
            ),
            91 => 
            array (
                'current_state' => 4,
                'date_add' => '2021-03-27 00:35:19',
                'id_address_delivery' => 92,
                'id_customer' => 92,
                'id_order' => 92,
                'reference' => '43233',
                'total_paid' => '78.000000',
            ),
            92 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 18:53:24',
                'id_address_delivery' => 93,
                'id_customer' => 93,
                'id_order' => 93,
                'reference' => '705914',
                'total_paid' => '45.000000',
            ),
            93 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 14:17:57',
                'id_address_delivery' => 94,
                'id_customer' => 94,
                'id_order' => 94,
                'reference' => '495405',
                'total_paid' => '63.000000',
            ),
            94 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 03:15:31',
                'id_address_delivery' => 95,
                'id_customer' => 95,
                'id_order' => 95,
                'reference' => '73827',
                'total_paid' => '19.000000',
            ),
            95 => 
            array (
                'current_state' => 6,
                'date_add' => '2021-03-27 02:11:06',
                'id_address_delivery' => 96,
                'id_customer' => 96,
                'id_order' => 96,
                'reference' => '66981',
                'total_paid' => '83.000000',
            ),
            96 => 
            array (
                'current_state' => 1,
                'date_add' => '2021-03-26 21:24:46',
                'id_address_delivery' => 97,
                'id_customer' => 97,
                'id_order' => 97,
                'reference' => '856009',
                'total_paid' => '9.000000',
            ),
            97 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 11:25:06',
                'id_address_delivery' => 98,
                'id_customer' => 98,
                'id_order' => 98,
                'reference' => '114721',
                'total_paid' => '102.000000',
            ),
            98 => 
            array (
                'current_state' => 5,
                'date_add' => '2021-03-27 12:58:04',
                'id_address_delivery' => 99,
                'id_customer' => 99,
                'id_order' => 99,
                'reference' => '313315',
                'total_paid' => '72.000000',
            ),
            99 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 23:04:32',
                'id_address_delivery' => 100,
                'id_customer' => 100,
                'id_order' => 100,
                'reference' => '484618',
                'total_paid' => '77.000000',
            ),
            100 => 
            array (
                'current_state' => 1,
                'date_add' => '2021-03-27 11:31:21',
                'id_address_delivery' => 1,
                'id_customer' => 1,
                'id_order' => 101,
                'reference' => '453209',
                'total_paid' => '61.000000',
            ),
            101 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 01:33:49',
                'id_address_delivery' => 2,
                'id_customer' => 2,
                'id_order' => 102,
                'reference' => '499685',
                'total_paid' => '34.000000',
            ),
            102 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 23:36:24',
                'id_address_delivery' => 3,
                'id_customer' => 3,
                'id_order' => 103,
                'reference' => '238137',
                'total_paid' => '79.000000',
            ),
            103 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 13:12:00',
                'id_address_delivery' => 4,
                'id_customer' => 4,
                'id_order' => 104,
                'reference' => '495302',
                'total_paid' => '65.000000',
            ),
            104 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 19:02:07',
                'id_address_delivery' => 5,
                'id_customer' => 5,
                'id_order' => 105,
                'reference' => '703213',
                'total_paid' => '49.000000',
            ),
            105 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 18:39:53',
                'id_address_delivery' => 6,
                'id_customer' => 6,
                'id_order' => 106,
                'reference' => '436496',
                'total_paid' => '95.000000',
            ),
            106 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 22:25:08',
                'id_address_delivery' => 7,
                'id_customer' => 7,
                'id_order' => 107,
                'reference' => '62160',
                'total_paid' => '96.000000',
            ),
            107 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 09:50:20',
                'id_address_delivery' => 8,
                'id_customer' => 8,
                'id_order' => 108,
                'reference' => '727319',
                'total_paid' => '72.000000',
            ),
            108 => 
            array (
                'current_state' => 7,
                'date_add' => '2021-03-27 05:50:24',
                'id_address_delivery' => 9,
                'id_customer' => 9,
                'id_order' => 109,
                'reference' => '802177',
                'total_paid' => '30.000000',
            ),
            109 => 
            array (
                'current_state' => 4,
                'date_add' => '2021-03-26 20:41:31',
                'id_address_delivery' => 10,
                'id_customer' => 10,
                'id_order' => 110,
                'reference' => '250444',
                'total_paid' => '33.000000',
            ),
            110 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 02:39:52',
                'id_address_delivery' => 11,
                'id_customer' => 11,
                'id_order' => 111,
                'reference' => '253950',
                'total_paid' => '88.000000',
            ),
            111 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 19:18:02',
                'id_address_delivery' => 12,
                'id_customer' => 12,
                'id_order' => 112,
                'reference' => '829050',
                'total_paid' => '92.000000',
            ),
            112 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 18:18:23',
                'id_address_delivery' => 13,
                'id_customer' => 13,
                'id_order' => 113,
                'reference' => '249888',
                'total_paid' => '25.000000',
            ),
            113 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 05:18:23',
                'id_address_delivery' => 14,
                'id_customer' => 14,
                'id_order' => 114,
                'reference' => '14414',
                'total_paid' => '84.000000',
            ),
            114 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 08:02:13',
                'id_address_delivery' => 15,
                'id_customer' => 15,
                'id_order' => 115,
                'reference' => '537619',
                'total_paid' => '49.000000',
            ),
            115 => 
            array (
                'current_state' => 8,
                'date_add' => '2021-03-26 18:29:42',
                'id_address_delivery' => 16,
                'id_customer' => 16,
                'id_order' => 116,
                'reference' => '152638',
                'total_paid' => '85.000000',
            ),
            116 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 20:42:04',
                'id_address_delivery' => 17,
                'id_customer' => 17,
                'id_order' => 117,
                'reference' => '277130',
                'total_paid' => '38.000000',
            ),
            117 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 13:05:16',
                'id_address_delivery' => 18,
                'id_customer' => 18,
                'id_order' => 118,
                'reference' => '120386',
                'total_paid' => '57.000000',
            ),
            118 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 07:40:19',
                'id_address_delivery' => 19,
                'id_customer' => 19,
                'id_order' => 119,
                'reference' => '3827',
                'total_paid' => '3.000000',
            ),
            119 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 12:57:49',
                'id_address_delivery' => 20,
                'id_customer' => 20,
                'id_order' => 120,
                'reference' => '390471',
                'total_paid' => '26.000000',
            ),
            120 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 14:27:49',
                'id_address_delivery' => 21,
                'id_customer' => 21,
                'id_order' => 121,
                'reference' => '792323',
                'total_paid' => '66.000000',
            ),
            121 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 05:10:14',
                'id_address_delivery' => 22,
                'id_customer' => 22,
                'id_order' => 122,
                'reference' => '15201',
                'total_paid' => '48.000000',
            ),
            122 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-26 21:08:25',
                'id_address_delivery' => 23,
                'id_customer' => 23,
                'id_order' => 123,
                'reference' => '552681',
                'total_paid' => '48.000000',
            ),
            123 => 
            array (
                'current_state' => 7,
                'date_add' => '2021-03-27 10:56:34',
                'id_address_delivery' => 24,
                'id_customer' => 24,
                'id_order' => 124,
                'reference' => '844378',
                'total_paid' => '74.000000',
            ),
            124 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 00:56:39',
                'id_address_delivery' => 25,
                'id_customer' => 25,
                'id_order' => 125,
                'reference' => '45657',
                'total_paid' => '41.000000',
            ),
            125 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 19:02:54',
                'id_address_delivery' => 26,
                'id_customer' => 26,
                'id_order' => 126,
                'reference' => '825925',
                'total_paid' => '30.000000',
            ),
            126 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 16:19:22',
                'id_address_delivery' => 27,
                'id_customer' => 27,
                'id_order' => 127,
                'reference' => '34561',
                'total_paid' => '95.000000',
            ),
            127 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 20:39:10',
                'id_address_delivery' => 28,
                'id_customer' => 28,
                'id_order' => 128,
                'reference' => '499245',
                'total_paid' => '9.000000',
            ),
            128 => 
            array (
                'current_state' => 1,
                'date_add' => '2021-03-27 13:39:30',
                'id_address_delivery' => 29,
                'id_customer' => 29,
                'id_order' => 129,
                'reference' => '877678',
                'total_paid' => '64.000000',
            ),
            129 => 
            array (
                'current_state' => 6,
                'date_add' => '2021-03-26 20:56:46',
                'id_address_delivery' => 30,
                'id_customer' => 30,
                'id_order' => 130,
                'reference' => '815188',
                'total_paid' => '18.000000',
            ),
            130 => 
            array (
                'current_state' => 1,
                'date_add' => '2021-03-27 13:43:05',
                'id_address_delivery' => 31,
                'id_customer' => 31,
                'id_order' => 131,
                'reference' => '683135',
                'total_paid' => '2.000000',
            ),
            131 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 13:29:54',
                'id_address_delivery' => 32,
                'id_customer' => 32,
                'id_order' => 132,
                'reference' => '644358',
                'total_paid' => '78.000000',
            ),
            132 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 05:46:41',
                'id_address_delivery' => 33,
                'id_customer' => 33,
                'id_order' => 133,
                'reference' => '427176',
                'total_paid' => '15.000000',
            ),
            133 => 
            array (
                'current_state' => 6,
                'date_add' => '2021-03-26 23:47:54',
                'id_address_delivery' => 34,
                'id_customer' => 34,
                'id_order' => 134,
                'reference' => '616413',
                'total_paid' => '62.000000',
            ),
            134 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 15:43:54',
                'id_address_delivery' => 35,
                'id_customer' => 35,
                'id_order' => 135,
                'reference' => '72333',
                'total_paid' => '93.000000',
            ),
            135 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 10:40:49',
                'id_address_delivery' => 36,
                'id_customer' => 36,
                'id_order' => 136,
                'reference' => '457009',
                'total_paid' => '20.000000',
            ),
            136 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 15:56:12',
                'id_address_delivery' => 37,
                'id_customer' => 37,
                'id_order' => 137,
                'reference' => '511848',
                'total_paid' => '98.000000',
            ),
            137 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 20:30:44',
                'id_address_delivery' => 38,
                'id_customer' => 38,
                'id_order' => 138,
                'reference' => '367560',
                'total_paid' => '7.000000',
            ),
            138 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 20:29:31',
                'id_address_delivery' => 39,
                'id_customer' => 39,
                'id_order' => 139,
                'reference' => '883369',
                'total_paid' => '63.000000',
            ),
            139 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 06:19:31',
                'id_address_delivery' => 40,
                'id_customer' => 40,
                'id_order' => 140,
                'reference' => '318666',
                'total_paid' => '33.000000',
            ),
            140 => 
            array (
                'current_state' => 4,
                'date_add' => '2021-03-26 19:31:19',
                'id_address_delivery' => 41,
                'id_customer' => 41,
                'id_order' => 141,
                'reference' => '262858',
                'total_paid' => '32.000000',
            ),
            141 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 07:22:36',
                'id_address_delivery' => 42,
                'id_customer' => 42,
                'id_order' => 142,
                'reference' => '56841',
                'total_paid' => '103.000000',
            ),
            142 => 
            array (
                'current_state' => 4,
                'date_add' => '2021-03-27 06:14:16',
                'id_address_delivery' => 43,
                'id_customer' => 43,
                'id_order' => 143,
                'reference' => '410500',
                'total_paid' => '21.000000',
            ),
            143 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 05:33:54',
                'id_address_delivery' => 44,
                'id_customer' => 44,
                'id_order' => 144,
                'reference' => '563603',
                'total_paid' => '72.000000',
            ),
            144 => 
            array (
                'current_state' => 7,
                'date_add' => '2021-03-27 10:03:51',
                'id_address_delivery' => 45,
                'id_customer' => 45,
                'id_order' => 145,
                'reference' => '7665',
                'total_paid' => '13.000000',
            ),
            145 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 17:42:16',
                'id_address_delivery' => 46,
                'id_customer' => 46,
                'id_order' => 146,
                'reference' => '572175',
                'total_paid' => '9.000000',
            ),
            146 => 
            array (
                'current_state' => 1,
                'date_add' => '2021-03-26 17:44:11',
                'id_address_delivery' => 47,
                'id_customer' => 47,
                'id_order' => 147,
                'reference' => '317307',
                'total_paid' => '87.000000',
            ),
            147 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 08:17:15',
                'id_address_delivery' => 48,
                'id_customer' => 48,
                'id_order' => 148,
                'reference' => '99944',
                'total_paid' => '54.000000',
            ),
            148 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 07:22:16',
                'id_address_delivery' => 49,
                'id_customer' => 49,
                'id_order' => 149,
                'reference' => '88547',
                'total_paid' => '30.000000',
            ),
            149 => 
            array (
                'current_state' => 1,
                'date_add' => '2021-03-26 15:51:32',
                'id_address_delivery' => 50,
                'id_customer' => 50,
                'id_order' => 150,
                'reference' => '541623',
                'total_paid' => '24.000000',
            ),
            150 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 13:54:10',
                'id_address_delivery' => 51,
                'id_customer' => 51,
                'id_order' => 151,
                'reference' => '488833',
                'total_paid' => '25.000000',
            ),
            151 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 10:12:12',
                'id_address_delivery' => 52,
                'id_customer' => 52,
                'id_order' => 152,
                'reference' => '81592',
                'total_paid' => '11.000000',
            ),
            152 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 21:00:12',
                'id_address_delivery' => 53,
                'id_customer' => 53,
                'id_order' => 153,
                'reference' => '671692',
                'total_paid' => '35.000000',
            ),
            153 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 02:00:13',
                'id_address_delivery' => 54,
                'id_customer' => 54,
                'id_order' => 154,
                'reference' => '253239',
                'total_paid' => '95.000000',
            ),
            154 => 
            array (
                'current_state' => 1,
                'date_add' => '2021-03-27 00:56:04',
                'id_address_delivery' => 55,
                'id_customer' => 55,
                'id_order' => 155,
                'reference' => '527801',
                'total_paid' => '53.000000',
            ),
            155 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-26 16:59:04',
                'id_address_delivery' => 56,
                'id_customer' => 56,
                'id_order' => 156,
                'reference' => '525570',
                'total_paid' => '22.000000',
            ),
            156 => 
            array (
                'current_state' => 6,
                'date_add' => '2021-03-26 22:08:48',
                'id_address_delivery' => 57,
                'id_customer' => 57,
                'id_order' => 157,
                'reference' => '738134',
                'total_paid' => '82.000000',
            ),
            157 => 
            array (
                'current_state' => 8,
                'date_add' => '2021-03-26 16:25:39',
                'id_address_delivery' => 58,
                'id_customer' => 58,
                'id_order' => 158,
                'reference' => '144956',
                'total_paid' => '21.000000',
            ),
            158 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 22:15:07',
                'id_address_delivery' => 59,
                'id_customer' => 59,
                'id_order' => 159,
                'reference' => '665092',
                'total_paid' => '54.000000',
            ),
            159 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 19:18:03',
                'id_address_delivery' => 60,
                'id_customer' => 60,
                'id_order' => 160,
                'reference' => '8845',
                'total_paid' => '38.000000',
            ),
            160 => 
            array (
                'current_state' => 1,
                'date_add' => '2021-03-27 10:56:43',
                'id_address_delivery' => 61,
                'id_customer' => 61,
                'id_order' => 161,
                'reference' => '762133',
                'total_paid' => '102.000000',
            ),
            161 => 
            array (
                'current_state' => 5,
                'date_add' => '2021-03-26 19:43:13',
                'id_address_delivery' => 62,
                'id_customer' => 62,
                'id_order' => 162,
                'reference' => '219116',
                'total_paid' => '96.000000',
            ),
            162 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 17:12:05',
                'id_address_delivery' => 63,
                'id_customer' => 63,
                'id_order' => 163,
                'reference' => '219329',
                'total_paid' => '85.000000',
            ),
            163 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 01:10:36',
                'id_address_delivery' => 64,
                'id_customer' => 64,
                'id_order' => 164,
                'reference' => '42024',
                'total_paid' => '83.000000',
            ),
            164 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 17:00:51',
                'id_address_delivery' => 65,
                'id_customer' => 65,
                'id_order' => 165,
                'reference' => '688299',
                'total_paid' => '97.000000',
            ),
            165 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 07:15:15',
                'id_address_delivery' => 66,
                'id_customer' => 66,
                'id_order' => 166,
                'reference' => '585421',
                'total_paid' => '41.000000',
            ),
            166 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 02:54:13',
                'id_address_delivery' => 67,
                'id_customer' => 67,
                'id_order' => 167,
                'reference' => '239689',
                'total_paid' => '29.000000',
            ),
            167 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 13:16:40',
                'id_address_delivery' => 68,
                'id_customer' => 68,
                'id_order' => 168,
                'reference' => '617342',
                'total_paid' => '63.000000',
            ),
            168 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 04:40:14',
                'id_address_delivery' => 69,
                'id_customer' => 69,
                'id_order' => 169,
                'reference' => '779987',
                'total_paid' => '48.000000',
            ),
            169 => 
            array (
                'current_state' => 6,
                'date_add' => '2021-03-27 03:57:28',
                'id_address_delivery' => 70,
                'id_customer' => 70,
                'id_order' => 170,
                'reference' => '466504',
                'total_paid' => '65.000000',
            ),
            170 => 
            array (
                'current_state' => 1,
                'date_add' => '2021-03-27 12:14:15',
                'id_address_delivery' => 71,
                'id_customer' => 71,
                'id_order' => 171,
                'reference' => '779204',
                'total_paid' => '1.000000',
            ),
            171 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 14:05:48',
                'id_address_delivery' => 72,
                'id_customer' => 72,
                'id_order' => 172,
                'reference' => '410609',
                'total_paid' => '87.000000',
            ),
            172 => 
            array (
                'current_state' => 6,
                'date_add' => '2021-03-27 00:13:03',
                'id_address_delivery' => 73,
                'id_customer' => 73,
                'id_order' => 173,
                'reference' => '300851',
                'total_paid' => '103.000000',
            ),
            173 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 04:44:05',
                'id_address_delivery' => 74,
                'id_customer' => 74,
                'id_order' => 174,
                'reference' => '866726',
                'total_paid' => '67.000000',
            ),
            174 => 
            array (
                'current_state' => 5,
                'date_add' => '2021-03-27 08:01:57',
                'id_address_delivery' => 75,
                'id_customer' => 75,
                'id_order' => 175,
                'reference' => '870589',
                'total_paid' => '66.000000',
            ),
            175 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 06:56:29',
                'id_address_delivery' => 76,
                'id_customer' => 76,
                'id_order' => 176,
                'reference' => '616568',
                'total_paid' => '43.000000',
            ),
            176 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 20:10:44',
                'id_address_delivery' => 77,
                'id_customer' => 77,
                'id_order' => 177,
                'reference' => '107131',
                'total_paid' => '100.000000',
            ),
            177 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 10:36:00',
                'id_address_delivery' => 78,
                'id_customer' => 78,
                'id_order' => 178,
                'reference' => '191447',
                'total_paid' => '60.000000',
            ),
            178 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 16:47:04',
                'id_address_delivery' => 79,
                'id_customer' => 79,
                'id_order' => 179,
                'reference' => '351200',
                'total_paid' => '103.000000',
            ),
            179 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 18:37:12',
                'id_address_delivery' => 80,
                'id_customer' => 80,
                'id_order' => 180,
                'reference' => '387097',
                'total_paid' => '85.000000',
            ),
            180 => 
            array (
                'current_state' => 6,
                'date_add' => '2021-03-26 23:05:43',
                'id_address_delivery' => 81,
                'id_customer' => 81,
                'id_order' => 181,
                'reference' => '293607',
                'total_paid' => '81.000000',
            ),
            181 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 10:10:54',
                'id_address_delivery' => 82,
                'id_customer' => 82,
                'id_order' => 182,
                'reference' => '338391',
                'total_paid' => '28.000000',
            ),
            182 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 11:04:05',
                'id_address_delivery' => 83,
                'id_customer' => 83,
                'id_order' => 183,
                'reference' => '224699',
                'total_paid' => '65.000000',
            ),
            183 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 16:43:37',
                'id_address_delivery' => 84,
                'id_customer' => 84,
                'id_order' => 184,
                'reference' => '313291',
                'total_paid' => '68.000000',
            ),
            184 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 11:59:21',
                'id_address_delivery' => 85,
                'id_customer' => 85,
                'id_order' => 185,
                'reference' => '391532',
                'total_paid' => '47.000000',
            ),
            185 => 
            array (
                'current_state' => 6,
                'date_add' => '2021-03-27 00:43:33',
                'id_address_delivery' => 86,
                'id_customer' => 86,
                'id_order' => 186,
                'reference' => '46561',
                'total_paid' => '64.000000',
            ),
            186 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-26 18:35:42',
                'id_address_delivery' => 87,
                'id_customer' => 87,
                'id_order' => 187,
                'reference' => '200850',
                'total_paid' => '9.000000',
            ),
            187 => 
            array (
                'current_state' => 6,
                'date_add' => '2021-03-27 00:45:51',
                'id_address_delivery' => 88,
                'id_customer' => 88,
                'id_order' => 188,
                'reference' => '495237',
                'total_paid' => '42.000000',
            ),
            188 => 
            array (
                'current_state' => 1,
                'date_add' => '2021-03-27 06:03:19',
                'id_address_delivery' => 89,
                'id_customer' => 89,
                'id_order' => 189,
                'reference' => '778810',
                'total_paid' => '77.000000',
            ),
            189 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 23:23:21',
                'id_address_delivery' => 90,
                'id_customer' => 90,
                'id_order' => 190,
                'reference' => '847388',
                'total_paid' => '54.000000',
            ),
            190 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-26 16:57:45',
                'id_address_delivery' => 91,
                'id_customer' => 91,
                'id_order' => 191,
                'reference' => '203153',
                'total_paid' => '1.000000',
            ),
            191 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 05:30:28',
                'id_address_delivery' => 92,
                'id_customer' => 92,
                'id_order' => 192,
                'reference' => '401373',
                'total_paid' => '89.000000',
            ),
            192 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 07:37:38',
                'id_address_delivery' => 93,
                'id_customer' => 93,
                'id_order' => 193,
                'reference' => '436286',
                'total_paid' => '10.000000',
            ),
            193 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 13:17:29',
                'id_address_delivery' => 94,
                'id_customer' => 94,
                'id_order' => 194,
                'reference' => '211140',
                'total_paid' => '21.000000',
            ),
            194 => 
            array (
                'current_state' => 7,
                'date_add' => '2021-03-27 04:42:24',
                'id_address_delivery' => 95,
                'id_customer' => 95,
                'id_order' => 195,
                'reference' => '80529',
                'total_paid' => '69.000000',
            ),
            195 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 06:06:22',
                'id_address_delivery' => 96,
                'id_customer' => 96,
                'id_order' => 196,
                'reference' => '806672',
                'total_paid' => '91.000000',
            ),
            196 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 04:10:28',
                'id_address_delivery' => 97,
                'id_customer' => 97,
                'id_order' => 197,
                'reference' => '494880',
                'total_paid' => '73.000000',
            ),
            197 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 06:56:11',
                'id_address_delivery' => 98,
                'id_customer' => 98,
                'id_order' => 198,
                'reference' => '593063',
                'total_paid' => '53.000000',
            ),
            198 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 13:58:57',
                'id_address_delivery' => 99,
                'id_customer' => 99,
                'id_order' => 199,
                'reference' => '734524',
                'total_paid' => '4.000000',
            ),
            199 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 16:02:08',
                'id_address_delivery' => 100,
                'id_customer' => 100,
                'id_order' => 200,
                'reference' => '642722',
                'total_paid' => '88.000000',
            ),
            200 => 
            array (
                'current_state' => 8,
                'date_add' => '2021-03-27 12:11:16',
                'id_address_delivery' => 1,
                'id_customer' => 1,
                'id_order' => 201,
                'reference' => '636682',
                'total_paid' => '58.000000',
            ),
            201 => 
            array (
                'current_state' => 8,
                'date_add' => '2021-03-27 04:52:39',
                'id_address_delivery' => 2,
                'id_customer' => 2,
                'id_order' => 202,
                'reference' => '701872',
                'total_paid' => '12.000000',
            ),
            202 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-26 21:23:37',
                'id_address_delivery' => 3,
                'id_customer' => 3,
                'id_order' => 203,
                'reference' => '547302',
                'total_paid' => '72.000000',
            ),
            203 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-26 22:53:56',
                'id_address_delivery' => 4,
                'id_customer' => 4,
                'id_order' => 204,
                'reference' => '271704',
                'total_paid' => '85.000000',
            ),
            204 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 05:48:03',
                'id_address_delivery' => 5,
                'id_customer' => 5,
                'id_order' => 205,
                'reference' => '213378',
                'total_paid' => '46.000000',
            ),
            205 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 04:37:42',
                'id_address_delivery' => 6,
                'id_customer' => 6,
                'id_order' => 206,
                'reference' => '708708',
                'total_paid' => '42.000000',
            ),
            206 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 05:50:31',
                'id_address_delivery' => 7,
                'id_customer' => 7,
                'id_order' => 207,
                'reference' => '604662',
                'total_paid' => '53.000000',
            ),
            207 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 16:45:09',
                'id_address_delivery' => 8,
                'id_customer' => 8,
                'id_order' => 208,
                'reference' => '550037',
                'total_paid' => '35.000000',
            ),
            208 => 
            array (
                'current_state' => 8,
                'date_add' => '2021-03-26 22:54:11',
                'id_address_delivery' => 9,
                'id_customer' => 9,
                'id_order' => 209,
                'reference' => '371431',
                'total_paid' => '25.000000',
            ),
            209 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 11:54:41',
                'id_address_delivery' => 10,
                'id_customer' => 10,
                'id_order' => 210,
                'reference' => '868212',
                'total_paid' => '44.000000',
            ),
            210 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 16:40:20',
                'id_address_delivery' => 11,
                'id_customer' => 11,
                'id_order' => 211,
                'reference' => '132919',
                'total_paid' => '7.000000',
            ),
            211 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 13:32:23',
                'id_address_delivery' => 12,
                'id_customer' => 12,
                'id_order' => 212,
                'reference' => '190298',
                'total_paid' => '11.000000',
            ),
            212 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 20:29:27',
                'id_address_delivery' => 13,
                'id_customer' => 13,
                'id_order' => 213,
                'reference' => '390446',
                'total_paid' => '11.000000',
            ),
            213 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-26 18:39:33',
                'id_address_delivery' => 14,
                'id_customer' => 14,
                'id_order' => 214,
                'reference' => '776143',
                'total_paid' => '22.000000',
            ),
            214 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 19:46:03',
                'id_address_delivery' => 15,
                'id_customer' => 15,
                'id_order' => 215,
                'reference' => '155214',
                'total_paid' => '92.000000',
            ),
            215 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 11:26:39',
                'id_address_delivery' => 16,
                'id_customer' => 16,
                'id_order' => 216,
                'reference' => '337366',
                'total_paid' => '32.000000',
            ),
            216 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-26 17:19:58',
                'id_address_delivery' => 17,
                'id_customer' => 17,
                'id_order' => 217,
                'reference' => '342596',
                'total_paid' => '78.000000',
            ),
            217 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 21:36:00',
                'id_address_delivery' => 18,
                'id_customer' => 18,
                'id_order' => 218,
                'reference' => '238506',
                'total_paid' => '46.000000',
            ),
            218 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 12:45:57',
                'id_address_delivery' => 19,
                'id_customer' => 19,
                'id_order' => 219,
                'reference' => '100075',
                'total_paid' => '94.000000',
            ),
            219 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 09:41:58',
                'id_address_delivery' => 20,
                'id_customer' => 20,
                'id_order' => 220,
                'reference' => '765043',
                'total_paid' => '28.000000',
            ),
            220 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 09:10:39',
                'id_address_delivery' => 21,
                'id_customer' => 21,
                'id_order' => 221,
                'reference' => '120790',
                'total_paid' => '88.000000',
            ),
            221 => 
            array (
                'current_state' => 7,
                'date_add' => '2021-03-27 08:25:42',
                'id_address_delivery' => 22,
                'id_customer' => 22,
                'id_order' => 222,
                'reference' => '259383',
                'total_paid' => '10.000000',
            ),
            222 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 14:23:42',
                'id_address_delivery' => 23,
                'id_customer' => 23,
                'id_order' => 223,
                'reference' => '349258',
                'total_paid' => '79.000000',
            ),
            223 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 21:04:35',
                'id_address_delivery' => 24,
                'id_customer' => 24,
                'id_order' => 224,
                'reference' => '569048',
                'total_paid' => '87.000000',
            ),
            224 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 02:24:16',
                'id_address_delivery' => 25,
                'id_customer' => 25,
                'id_order' => 225,
                'reference' => '698501',
                'total_paid' => '32.000000',
            ),
            225 => 
            array (
                'current_state' => 8,
                'date_add' => '2021-03-26 21:52:09',
                'id_address_delivery' => 26,
                'id_customer' => 26,
                'id_order' => 226,
                'reference' => '455270',
                'total_paid' => '68.000000',
            ),
            226 => 
            array (
                'current_state' => 5,
                'date_add' => '2021-03-27 05:15:43',
                'id_address_delivery' => 27,
                'id_customer' => 27,
                'id_order' => 227,
                'reference' => '454072',
                'total_paid' => '1.000000',
            ),
            227 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 11:43:25',
                'id_address_delivery' => 28,
                'id_customer' => 28,
                'id_order' => 228,
                'reference' => '15189',
                'total_paid' => '79.000000',
            ),
            228 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 18:16:50',
                'id_address_delivery' => 29,
                'id_customer' => 29,
                'id_order' => 229,
                'reference' => '63014',
                'total_paid' => '11.000000',
            ),
            229 => 
            array (
                'current_state' => 6,
                'date_add' => '2021-03-27 07:43:19',
                'id_address_delivery' => 30,
                'id_customer' => 30,
                'id_order' => 230,
                'reference' => '366029',
                'total_paid' => '48.000000',
            ),
            230 => 
            array (
                'current_state' => 4,
                'date_add' => '2021-03-27 00:17:11',
                'id_address_delivery' => 31,
                'id_customer' => 31,
                'id_order' => 231,
                'reference' => '136322',
                'total_paid' => '98.000000',
            ),
            231 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 22:38:12',
                'id_address_delivery' => 32,
                'id_customer' => 32,
                'id_order' => 232,
                'reference' => '129007',
                'total_paid' => '64.000000',
            ),
            232 => 
            array (
                'current_state' => 4,
                'date_add' => '2021-03-26 20:23:53',
                'id_address_delivery' => 33,
                'id_customer' => 33,
                'id_order' => 233,
                'reference' => '714322',
                'total_paid' => '73.000000',
            ),
            233 => 
            array (
                'current_state' => 5,
                'date_add' => '2021-03-26 22:53:16',
                'id_address_delivery' => 34,
                'id_customer' => 34,
                'id_order' => 234,
                'reference' => '54757',
                'total_paid' => '39.000000',
            ),
            234 => 
            array (
                'current_state' => 4,
                'date_add' => '2021-03-26 15:31:31',
                'id_address_delivery' => 35,
                'id_customer' => 35,
                'id_order' => 235,
                'reference' => '518240',
                'total_paid' => '6.000000',
            ),
            235 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 22:40:42',
                'id_address_delivery' => 36,
                'id_customer' => 36,
                'id_order' => 236,
                'reference' => '876550',
                'total_paid' => '62.000000',
            ),
            236 => 
            array (
                'current_state' => 4,
                'date_add' => '2021-03-27 02:44:11',
                'id_address_delivery' => 37,
                'id_customer' => 37,
                'id_order' => 237,
                'reference' => '757263',
                'total_paid' => '19.000000',
            ),
            237 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 01:54:47',
                'id_address_delivery' => 38,
                'id_customer' => 38,
                'id_order' => 238,
                'reference' => '851049',
                'total_paid' => '5.000000',
            ),
            238 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 09:25:49',
                'id_address_delivery' => 39,
                'id_customer' => 39,
                'id_order' => 239,
                'reference' => '171965',
                'total_paid' => '76.000000',
            ),
            239 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-26 17:22:30',
                'id_address_delivery' => 40,
                'id_customer' => 40,
                'id_order' => 240,
                'reference' => '620968',
                'total_paid' => '5.000000',
            ),
            240 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 21:16:25',
                'id_address_delivery' => 41,
                'id_customer' => 41,
                'id_order' => 241,
                'reference' => '363445',
                'total_paid' => '70.000000',
            ),
            241 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 01:13:19',
                'id_address_delivery' => 42,
                'id_customer' => 42,
                'id_order' => 242,
                'reference' => '297074',
                'total_paid' => '89.000000',
            ),
            242 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 05:26:12',
                'id_address_delivery' => 43,
                'id_customer' => 43,
                'id_order' => 243,
                'reference' => '534098',
                'total_paid' => '35.000000',
            ),
            243 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 06:51:25',
                'id_address_delivery' => 44,
                'id_customer' => 44,
                'id_order' => 244,
                'reference' => '49686',
                'total_paid' => '101.000000',
            ),
            244 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-26 21:34:03',
                'id_address_delivery' => 45,
                'id_customer' => 45,
                'id_order' => 245,
                'reference' => '389765',
                'total_paid' => '43.000000',
            ),
            245 => 
            array (
                'current_state' => 4,
                'date_add' => '2021-03-27 14:32:48',
                'id_address_delivery' => 46,
                'id_customer' => 46,
                'id_order' => 246,
                'reference' => '162426',
                'total_paid' => '69.000000',
            ),
            246 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 03:56:17',
                'id_address_delivery' => 47,
                'id_customer' => 47,
                'id_order' => 247,
                'reference' => '864808',
                'total_paid' => '4.000000',
            ),
            247 => 
            array (
                'current_state' => 5,
                'date_add' => '2021-03-27 06:26:00',
                'id_address_delivery' => 48,
                'id_customer' => 48,
                'id_order' => 248,
                'reference' => '567340',
                'total_paid' => '43.000000',
            ),
            248 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 00:56:21',
                'id_address_delivery' => 49,
                'id_customer' => 49,
                'id_order' => 249,
                'reference' => '11847',
                'total_paid' => '20.000000',
            ),
            249 => 
            array (
                'current_state' => 8,
                'date_add' => '2021-03-27 02:30:05',
                'id_address_delivery' => 50,
                'id_customer' => 50,
                'id_order' => 250,
                'reference' => '498280',
                'total_paid' => '30.000000',
            ),
            250 => 
            array (
                'current_state' => 4,
                'date_add' => '2021-03-26 17:59:52',
                'id_address_delivery' => 51,
                'id_customer' => 51,
                'id_order' => 251,
                'reference' => '529137',
                'total_paid' => '30.000000',
            ),
            251 => 
            array (
                'current_state' => 1,
                'date_add' => '2021-03-27 07:33:48',
                'id_address_delivery' => 52,
                'id_customer' => 52,
                'id_order' => 252,
                'reference' => '728181',
                'total_paid' => '98.000000',
            ),
            252 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 03:08:18',
                'id_address_delivery' => 53,
                'id_customer' => 53,
                'id_order' => 253,
                'reference' => '597579',
                'total_paid' => '70.000000',
            ),
            253 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 19:49:13',
                'id_address_delivery' => 54,
                'id_customer' => 54,
                'id_order' => 254,
                'reference' => '480541',
                'total_paid' => '35.000000',
            ),
            254 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-26 20:51:59',
                'id_address_delivery' => 55,
                'id_customer' => 55,
                'id_order' => 255,
                'reference' => '30970',
                'total_paid' => '43.000000',
            ),
            255 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 06:06:53',
                'id_address_delivery' => 56,
                'id_customer' => 56,
                'id_order' => 256,
                'reference' => '19685',
                'total_paid' => '35.000000',
            ),
            256 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 01:15:14',
                'id_address_delivery' => 57,
                'id_customer' => 57,
                'id_order' => 257,
                'reference' => '175342',
                'total_paid' => '56.000000',
            ),
            257 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 16:19:32',
                'id_address_delivery' => 58,
                'id_customer' => 58,
                'id_order' => 258,
                'reference' => '512004',
                'total_paid' => '92.000000',
            ),
            258 => 
            array (
                'current_state' => 5,
                'date_add' => '2021-03-27 04:13:31',
                'id_address_delivery' => 59,
                'id_customer' => 59,
                'id_order' => 259,
                'reference' => '597789',
                'total_paid' => '63.000000',
            ),
            259 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 21:56:15',
                'id_address_delivery' => 60,
                'id_customer' => 60,
                'id_order' => 260,
                'reference' => '878251',
                'total_paid' => '89.000000',
            ),
            260 => 
            array (
                'current_state' => 7,
                'date_add' => '2021-03-26 23:36:28',
                'id_address_delivery' => 61,
                'id_customer' => 61,
                'id_order' => 261,
                'reference' => '824788',
                'total_paid' => '45.000000',
            ),
            261 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 07:32:21',
                'id_address_delivery' => 62,
                'id_customer' => 62,
                'id_order' => 262,
                'reference' => '481768',
                'total_paid' => '19.000000',
            ),
            262 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-26 20:10:53',
                'id_address_delivery' => 63,
                'id_customer' => 63,
                'id_order' => 263,
                'reference' => '850602',
                'total_paid' => '82.000000',
            ),
            263 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 12:19:10',
                'id_address_delivery' => 64,
                'id_customer' => 64,
                'id_order' => 264,
                'reference' => '680649',
                'total_paid' => '89.000000',
            ),
            264 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 07:36:08',
                'id_address_delivery' => 65,
                'id_customer' => 65,
                'id_order' => 265,
                'reference' => '816353',
                'total_paid' => '102.000000',
            ),
            265 => 
            array (
                'current_state' => 6,
                'date_add' => '2021-03-27 00:16:14',
                'id_address_delivery' => 66,
                'id_customer' => 66,
                'id_order' => 266,
                'reference' => '500521',
                'total_paid' => '21.000000',
            ),
            266 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 04:14:33',
                'id_address_delivery' => 67,
                'id_customer' => 67,
                'id_order' => 267,
                'reference' => '339916',
                'total_paid' => '21.000000',
            ),
            267 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 12:29:47',
                'id_address_delivery' => 68,
                'id_customer' => 68,
                'id_order' => 268,
                'reference' => '193240',
                'total_paid' => '62.000000',
            ),
            268 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 14:04:30',
                'id_address_delivery' => 69,
                'id_customer' => 69,
                'id_order' => 269,
                'reference' => '651991',
                'total_paid' => '96.000000',
            ),
            269 => 
            array (
                'current_state' => 1,
                'date_add' => '2021-03-27 00:41:56',
                'id_address_delivery' => 70,
                'id_customer' => 70,
                'id_order' => 270,
                'reference' => '63430',
                'total_paid' => '71.000000',
            ),
            270 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 23:21:42',
                'id_address_delivery' => 71,
                'id_customer' => 71,
                'id_order' => 271,
                'reference' => '13668',
                'total_paid' => '16.000000',
            ),
            271 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 05:15:00',
                'id_address_delivery' => 72,
                'id_customer' => 72,
                'id_order' => 272,
                'reference' => '301339',
                'total_paid' => '60.000000',
            ),
            272 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 15:42:58',
                'id_address_delivery' => 73,
                'id_customer' => 73,
                'id_order' => 273,
                'reference' => '265179',
                'total_paid' => '54.000000',
            ),
            273 => 
            array (
                'current_state' => 4,
                'date_add' => '2021-03-27 06:02:34',
                'id_address_delivery' => 74,
                'id_customer' => 74,
                'id_order' => 274,
                'reference' => '580049',
                'total_paid' => '40.000000',
            ),
            274 => 
            array (
                'current_state' => 1,
                'date_add' => '2021-03-26 18:48:21',
                'id_address_delivery' => 75,
                'id_customer' => 75,
                'id_order' => 275,
                'reference' => '22945',
                'total_paid' => '46.000000',
            ),
            275 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 02:55:41',
                'id_address_delivery' => 76,
                'id_customer' => 76,
                'id_order' => 276,
                'reference' => '446525',
                'total_paid' => '64.000000',
            ),
            276 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 01:39:05',
                'id_address_delivery' => 77,
                'id_customer' => 77,
                'id_order' => 277,
                'reference' => '603867',
                'total_paid' => '11.000000',
            ),
            277 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 09:02:24',
                'id_address_delivery' => 78,
                'id_customer' => 78,
                'id_order' => 278,
                'reference' => '864988',
                'total_paid' => '54.000000',
            ),
            278 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 09:33:07',
                'id_address_delivery' => 79,
                'id_customer' => 79,
                'id_order' => 279,
                'reference' => '229861',
                'total_paid' => '33.000000',
            ),
            279 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 01:09:39',
                'id_address_delivery' => 80,
                'id_customer' => 80,
                'id_order' => 280,
                'reference' => '853016',
                'total_paid' => '53.000000',
            ),
            280 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 03:56:19',
                'id_address_delivery' => 81,
                'id_customer' => 81,
                'id_order' => 281,
                'reference' => '564990',
                'total_paid' => '83.000000',
            ),
            281 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 19:57:13',
                'id_address_delivery' => 82,
                'id_customer' => 82,
                'id_order' => 282,
                'reference' => '299087',
                'total_paid' => '77.000000',
            ),
            282 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 23:06:07',
                'id_address_delivery' => 83,
                'id_customer' => 83,
                'id_order' => 283,
                'reference' => '749636',
                'total_paid' => '89.000000',
            ),
            283 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 07:30:29',
                'id_address_delivery' => 84,
                'id_customer' => 84,
                'id_order' => 284,
                'reference' => '147059',
                'total_paid' => '83.000000',
            ),
            284 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 01:07:55',
                'id_address_delivery' => 85,
                'id_customer' => 85,
                'id_order' => 285,
                'reference' => '83064',
                'total_paid' => '87.000000',
            ),
            285 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 01:53:42',
                'id_address_delivery' => 86,
                'id_customer' => 86,
                'id_order' => 286,
                'reference' => '561883',
                'total_paid' => '57.000000',
            ),
            286 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 12:41:49',
                'id_address_delivery' => 87,
                'id_customer' => 87,
                'id_order' => 287,
                'reference' => '593420',
                'total_paid' => '85.000000',
            ),
            287 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 16:20:23',
                'id_address_delivery' => 88,
                'id_customer' => 88,
                'id_order' => 288,
                'reference' => '90136',
                'total_paid' => '34.000000',
            ),
            288 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 04:27:00',
                'id_address_delivery' => 89,
                'id_customer' => 89,
                'id_order' => 289,
                'reference' => '304777',
                'total_paid' => '26.000000',
            ),
            289 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 13:42:29',
                'id_address_delivery' => 90,
                'id_customer' => 90,
                'id_order' => 290,
                'reference' => '87866',
                'total_paid' => '79.000000',
            ),
            290 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 22:55:15',
                'id_address_delivery' => 91,
                'id_customer' => 91,
                'id_order' => 291,
                'reference' => '429786',
                'total_paid' => '88.000000',
            ),
            291 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 09:50:14',
                'id_address_delivery' => 92,
                'id_customer' => 92,
                'id_order' => 292,
                'reference' => '138246',
                'total_paid' => '37.000000',
            ),
            292 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-27 00:50:36',
                'id_address_delivery' => 93,
                'id_customer' => 93,
                'id_order' => 293,
                'reference' => '808188',
                'total_paid' => '97.000000',
            ),
            293 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 18:10:15',
                'id_address_delivery' => 94,
                'id_customer' => 94,
                'id_order' => 294,
                'reference' => '262510',
                'total_paid' => '36.000000',
            ),
            294 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 17:33:49',
                'id_address_delivery' => 95,
                'id_customer' => 95,
                'id_order' => 295,
                'reference' => '590111',
                'total_paid' => '74.000000',
            ),
            295 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 23:30:50',
                'id_address_delivery' => 96,
                'id_customer' => 96,
                'id_order' => 296,
                'reference' => '401115',
                'total_paid' => '19.000000',
            ),
            296 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-26 19:49:46',
                'id_address_delivery' => 97,
                'id_customer' => 97,
                'id_order' => 297,
                'reference' => '247911',
                'total_paid' => '46.000000',
            ),
            297 => 
            array (
                'current_state' => 3,
                'date_add' => '2021-03-27 03:17:17',
                'id_address_delivery' => 98,
                'id_customer' => 98,
                'id_order' => 298,
                'reference' => '642494',
                'total_paid' => '77.000000',
            ),
            298 => 
            array (
                'current_state' => 2,
                'date_add' => '2021-03-26 19:55:46',
                'id_address_delivery' => 99,
                'id_customer' => 99,
                'id_order' => 299,
                'reference' => '325762',
                'total_paid' => '40.000000',
            ),
            299 => 
            array (
                'current_state' => 8,
                'date_add' => '2021-03-27 01:27:18',
                'id_address_delivery' => 100,
                'id_customer' => 100,
                'id_order' => 300,
                'reference' => '816597',
                'total_paid' => '9.000000',
            ),
        ));
        
        
    }
}