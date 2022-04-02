<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderStateLangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('order_state_lang')->delete();
        
        \DB::table('order_state_lang')->insert(array (
            0 => 
            array (
                'id_order_state' => 1,
                'name' => 'Pago pendiente',
            ),
            1 => 
            array (
                'id_order_state' => 2,
                'name' => 'Pago aceptado',
            ),
            2 => 
            array (
                'id_order_state' => 3,
                'name' => 'Preparación en proceso',
            ),
            3 => 
            array (
                'id_order_state' => 4,
                'name' => 'Enviado',
            ),
            4 => 
            array (
                'id_order_state' => 5,
                'name' => 'Entregado',
            ),
            5 => 
            array (
                'id_order_state' => 6,
                'name' => 'Cancelado',
            ),
            6 => 
            array (
                'id_order_state' => 7,
                'name' => 'Reembolso',
            ),
            7 => 
            array (
                'id_order_state' => 8,
                'name' => 'Error en el pago',
            ),
        ));
        
        
    }
}