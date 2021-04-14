<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItinerarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('itinerarios')->insert(['iti_price'=>120
        ,'iti_terminal_llegada'=>'Terminal Terrestre Tacna'
        ,'iti_terminal_origen'=>'Terminal Terrestre La Oroya'
        ,'iti_salida'=>'2021-05-12 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>20,
        'iti_service'=>'Ninguno'
        ]);



        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Piura'
        ,'iti_terminal_origen'=>'Terminal Terrestre La Ancash'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>110
        ,'iti_terminal_llegada'=>'Terminal Terrestre Santa'
        ,'iti_terminal_origen'=>'Terminal Terrestre Marina'
        ,'iti_salida'=>'2021-05-18 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>5,
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>80
        ,'iti_terminal_llegada'=>'Terminal Terrestre Paco'
        ,'iti_terminal_origen'=>'Terminal Terrestre Fanta'
        ,'iti_salida'=>'2021-05-17 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>8,
        'iti_service'=>'TV'
        ]);
    }
}
