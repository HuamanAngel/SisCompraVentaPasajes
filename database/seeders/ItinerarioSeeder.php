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
        ,'iti_salida'=>'2021-05-12 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>20,
        'iti_service'=>'Ninguno'
        ]);

        DB::table('itinerarios')->insert(['iti_price'=>120
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>120
        ,'iti_salida'=>'2021-05-18 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>5,
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>120
        ,'iti_salida'=>'2021-05-17 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>8,
        'iti_service'=>'TV'
        ]);
    }
}
