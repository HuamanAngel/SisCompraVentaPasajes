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
        ,'iti_terminal_llegada'=>'Terminal Terrestre Ancash'
        ,'iti_terminal_origen'=>'Terminal Terrestre Amazonas'
        ,'iti_salida'=>'2021-05-12 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>20,
        'iti_depa_origen'=>"Amazonas",
        'iti_depa_llegada'=>"Ancash",
        'iti_service'=>'Ninguno'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>120
        ,'iti_terminal_llegada'=>'Terminal Terrestre Ancash'
        ,'iti_terminal_origen'=>'Terminal Terrestre Amazonas'
        ,'iti_salida'=>'2021-05-12 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>20,
        'iti_depa_origen'=>"Amazonas",
        'iti_depa_llegada'=>"Ancash",
        'iti_service'=>'Ninguno'
        ]);
//Apurimac - Ancash

        DB::table('itinerarios')->insert(['iti_price'=>100
        ,'iti_terminal_llegada'=>'Terminal Terrestre Abancay'
        ,'iti_terminal_origen'=>'Terminal Terrestre Chimbote'
        ,'iti_salida'=>'2021-05-20 18:12:00',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>22,
        'iti_depa_origen'=>"Ancash",
        'iti_depa_llegada'=>"Apurimac",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>20
        ,'iti_terminal_llegada'=>'Terminal Terrestre Apurimac'
        ,'iti_terminal_origen'=>'Terminal Terrestre Santa'
        ,'iti_salida'=>'2021-05-20 11:00:00',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>30,
        'iti_depa_origen'=>"Ancash",
        'iti_depa_llegada'=>"Apurimac",
        'iti_service'=>'TV'
        ]);
        //
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Grau'
        ,'iti_terminal_origen'=>'Terminal Terrestre Yungay'
        ,'iti_salida'=>'2021-05-20 20:00:00',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Ancash",
        'iti_depa_llegada'=>"Apurimac",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>150
        ,'iti_terminal_llegada'=>'Terminal Terrestre Apurimac'
        ,'iti_terminal_origen'=>'Terminal Terrestre Santa'
        ,'iti_salida'=>'2021-05-20 12:00:00',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Ancash",
        'iti_depa_llegada'=>"Apurimac",
        'iti_service'=>'Ninguno'
        ]);
//Apurimac - Ancash

        DB::table('itinerarios')->insert(['iti_price'=>110
        ,'iti_terminal_llegada'=>'Terminal Terrestre Arequipa'
        ,'iti_terminal_origen'=>'Terminal Terrestre Abancay'
        ,'iti_salida'=>'2021-05-18 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>5,
        'iti_depa_origen'=>"Apurimac",
        'iti_depa_llegada'=>"Arequipa",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>110
        ,'iti_terminal_llegada'=>'Terminal Terrestre Arequipa'
        ,'iti_terminal_origen'=>'Terminal Terrestre Abancay'
        ,'iti_salida'=>'2021-05-18 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>5,
        'iti_depa_origen'=>"Apurimac",
        'iti_depa_llegada'=>"Arequipa",
        'iti_service'=>'WIFI'
        ]);
        //
        DB::table('itinerarios')->insert(['iti_price'=>80
        ,'iti_terminal_llegada'=>'Terminal Terrestre Ayacucho'
        ,'iti_terminal_origen'=>'Terminal Terrestre Arequipa'
        ,'iti_salida'=>'2021-05-17 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>8,
        'iti_depa_origen'=>"Arequipa",
        'iti_depa_llegada'=>"Ayacucho",
        'iti_service'=>'TV'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>80
        ,'iti_terminal_llegada'=>'Terminal Terrestre Ayacucho'
        ,'iti_terminal_origen'=>'Terminal Terrestre Arequipa'
        ,'iti_salida'=>'2021-05-17 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>8,
        'iti_depa_origen'=>"Arequipa",
        'iti_depa_llegada'=>"Ayacucho",
        'iti_service'=>'TV'
        ]);
        //
        DB::table('itinerarios')->insert(['iti_price'=>110
        ,'iti_terminal_llegada'=>'Terminal Terrestre Cajamarca'
        ,'iti_terminal_origen'=>'Terminal Terrestre Ayacucho'
        ,'iti_salida'=>'2021-05-18 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>5,
        'iti_depa_origen'=>"Ayacucho",
        'iti_depa_llegada'=>"Cajamarca",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>110
        ,'iti_terminal_llegada'=>'Terminal Terrestre Cajamarca'
        ,'iti_terminal_origen'=>'Terminal Terrestre Ayacucho'
        ,'iti_salida'=>'2021-05-18 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>5,
        'iti_depa_origen'=>"Ayacucho",
        'iti_depa_llegada'=>"Cajamarca",
        'iti_service'=>'WIFI'
        ]);
        //
        DB::table('itinerarios')->insert(['iti_price'=>80
        ,'iti_terminal_llegada'=>'Terminal Terrestre Cuzco'
        ,'iti_terminal_origen'=>'Terminal Terrestre Cajamarca'
        ,'iti_salida'=>'2021-05-17 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>8,
        'iti_depa_origen'=>"Cajamarca",
        'iti_depa_llegada'=>"Cuzco",
        'iti_service'=>'TV'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>80
        ,'iti_terminal_llegada'=>'Terminal Terrestre Cuzco'
        ,'iti_terminal_origen'=>'Terminal Terrestre Cajamarca'
        ,'iti_salida'=>'2021-05-17 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>8,
        'iti_depa_origen'=>"Cajamarca",
        'iti_depa_llegada'=>"Cuzco",
        'iti_service'=>'TV'
        ]);
        //
        DB::table('itinerarios')->insert(['iti_price'=>110
        ,'iti_terminal_llegada'=>'Terminal Terrestre Huancavelica'
        ,'iti_terminal_origen'=>'Terminal Terrestre Cuzco'
        ,'iti_salida'=>'2021-05-18 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>5,
        'iti_depa_origen'=>"Cuzco",
        'iti_depa_llegada'=>"Huancavelica",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>110
        ,'iti_terminal_llegada'=>'Terminal Terrestre Huancavelica'
        ,'iti_terminal_origen'=>'Terminal Terrestre Cuzco'
        ,'iti_salida'=>'2021-05-18 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>5,
        'iti_depa_origen'=>"Cuzco",
        'iti_depa_llegada'=>"Huancavelica",
        'iti_service'=>'WIFI'
        ]);
        //
        DB::table('itinerarios')->insert(['iti_price'=>80
        ,'iti_terminal_llegada'=>'Terminal Terrestre Huanuco'
        ,'iti_terminal_origen'=>'Terminal Terrestre Huacavelica'
        ,'iti_salida'=>'2021-05-17 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>8,
        'iti_depa_origen'=>"Huanuco",
        'iti_depa_llegada'=>"Huancavelica",
        'iti_service'=>'TV'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>80
        ,'iti_terminal_llegada'=>'Terminal Terrestre Huanuco'
        ,'iti_terminal_origen'=>'Terminal Terrestre Huacavelica'
        ,'iti_salida'=>'2021-05-17 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>8,
        'iti_depa_origen'=>"Huanuco",
        'iti_depa_llegada'=>"Huancavelica",
        'iti_service'=>'TV'
        ]);
        //
        DB::table('itinerarios')->insert(['iti_price'=>120
        ,'iti_terminal_llegada'=>'Terminal Terrestre Ica'
        ,'iti_terminal_origen'=>'Terminal Terrestre Huanuco'
        ,'iti_salida'=>'2021-05-12 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>20,
        'iti_depa_origen'=>"Ica",
        'iti_depa_llegada'=>"Huanuco",
        'iti_service'=>'Ninguno'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>120
        ,'iti_terminal_llegada'=>'Terminal Terrestre Ica'
        ,'iti_terminal_origen'=>'Terminal Terrestre Huanuco'
        ,'iti_salida'=>'2021-05-12 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>20,
        'iti_depa_origen'=>"Ica",
        'iti_depa_llegada'=>"Huanuco",
        'iti_service'=>'Ninguno'
        ]);
//
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Junin'
        ,'iti_terminal_origen'=>'Terminal Terrestre Ica'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Ica",
        'iti_depa_llegada'=>"Junin",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Junin'
        ,'iti_terminal_origen'=>'Terminal Terrestre Ica'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Ica",
        'iti_depa_llegada'=>"Junin",
        'iti_service'=>'WIFI'
        ]);
        //
        DB::table('itinerarios')->insert(['iti_price'=>120
        ,'iti_terminal_llegada'=>'Terminal Terrestre La Libertad'
        ,'iti_terminal_origen'=>'Terminal Terrestre Junin'
        ,'iti_salida'=>'2021-05-12 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>20,
        'iti_depa_origen'=>"Junin",
        'iti_depa_llegada'=>"La Libertad",
        'iti_service'=>'Ninguno'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>120
        ,'iti_terminal_llegada'=>'Terminal Terrestre La Libertad'
        ,'iti_terminal_origen'=>'Terminal Terrestre Junin'
        ,'iti_salida'=>'2021-05-12 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>20,
        'iti_depa_origen'=>"Junin",
        'iti_depa_llegada'=>"La Libertad",
        'iti_service'=>'Ninguno'
        ]);
        //

        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Lambayeque'
        ,'iti_terminal_origen'=>'Terminal Terrestre La Libertad'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"La Libertad",
        'iti_depa_llegada'=>"Lambayeque",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Lambayeque'
        ,'iti_terminal_origen'=>'Terminal Terrestre La Libertad'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"La Libertad",
        'iti_depa_llegada'=>"Lambayeque",
        'iti_service'=>'WIFI'
        ]);
        //
        DB::table('itinerarios')->insert(['iti_price'=>120
        ,'iti_terminal_llegada'=>'Terminal Terrestre Lima'
        ,'iti_terminal_origen'=>'Terminal Terrestre Lambayeque'
        ,'iti_salida'=>'2021-05-12 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>20,
        'iti_depa_origen'=>"Lambayeque",
        'iti_depa_llegada'=>"Lima",
        'iti_service'=>'Ninguno'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>120
        ,'iti_terminal_llegada'=>'Terminal Terrestre Lima'
        ,'iti_terminal_origen'=>'Terminal Terrestre Lambayeque'
        ,'iti_salida'=>'2021-05-12 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>20,
        'iti_depa_origen'=>"Lambayeque",
        'iti_depa_llegada'=>"Lima",
        'iti_service'=>'Ninguno'
        ]);
//
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Loreto'
        ,'iti_terminal_origen'=>'Terminal Terrestre Lima'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Lima",
        'iti_depa_llegada'=>"Loreto",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Loreto'
        ,'iti_terminal_origen'=>'Terminal Terrestre Lima'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Lima",
        'iti_depa_llegada'=>"Loreto",
        'iti_service'=>'WIFI'
        ]);
        //
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Madre de Dios'
        ,'iti_terminal_origen'=>'Terminal Terrestre Loreto'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Loreto",
        'iti_depa_llegada'=>"Madre de Dios",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Madre de Dios'
        ,'iti_terminal_origen'=>'Terminal Terrestre Loreto'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Loreto",
        'iti_depa_llegada'=>"Madre de Dios",
        'iti_service'=>'WIFI'
        ]);
        //
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Moquegua'
        ,'iti_terminal_origen'=>'Terminal Terrestre Madre de Dios'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Madre de Dios",
        'iti_depa_llegada'=>"Moquegua",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Moquegua'
        ,'iti_terminal_origen'=>'Terminal Terrestre Madre de Dios'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Madre de Dios",
        'iti_depa_llegada'=>"Moquegua",
        'iti_service'=>'WIFI'
        ]);
        //
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Pasco'
        ,'iti_terminal_origen'=>'Terminal Terrestre Moquegua'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Moquegua",
        'iti_depa_llegada'=>"Pasco",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Pasco'
        ,'iti_terminal_origen'=>'Terminal Terrestre Moquegua'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Moquegua",
        'iti_depa_llegada'=>"Pasco",
        'iti_service'=>'WIFI'
        ]);
        //
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Piura'
        ,'iti_terminal_origen'=>'Terminal Terrestre Pasco'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Pasco",
        'iti_depa_llegada'=>"Piura",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Piura'
        ,'iti_terminal_origen'=>'Terminal Terrestre Pasco'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Pasco",
        'iti_depa_llegada'=>"Piura",
        'iti_service'=>'WIFI'
        ]);
        //
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Puno'
        ,'iti_terminal_origen'=>'Terminal Terrestre Piura'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Piura",
        'iti_depa_llegada'=>"Puno",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Puno'
        ,'iti_terminal_origen'=>'Terminal Terrestre Piura'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Piura",
        'iti_depa_llegada'=>"Puno",
        'iti_service'=>'WIFI'
        ]);
        //
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre San Martin'
        ,'iti_terminal_origen'=>'Terminal Terrestre Puno'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Puno",
        'iti_depa_llegada'=>"San Martin",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre San Martin'
        ,'iti_terminal_origen'=>'Terminal Terrestre Puno'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Puno",
        'iti_depa_llegada'=>"San Martin",
        'iti_service'=>'WIFI'
        ]);
        //
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Tacna'
        ,'iti_terminal_origen'=>'Terminal Terrestre San Martin'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"San Martin",
        'iti_depa_llegada'=>"Tacna",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Tacna'
        ,'iti_terminal_origen'=>'Terminal Terrestre San Martin'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"San Martin",
        'iti_depa_llegada'=>"Tacna",
        'iti_service'=>'WIFI'
        ]);
        //
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Tumbes'
        ,'iti_terminal_origen'=>'Terminal Terrestre Tacna'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Tacna",
        'iti_depa_llegada'=>"Tumbes",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Tumbes'
        ,'iti_terminal_origen'=>'Terminal Terrestre Tacna'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Tacna",
        'iti_depa_llegada'=>"Tumbes",
        'iti_service'=>'WIFI'
        ]);
        //lima
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Amazonas'
        ,'iti_terminal_origen'=>'Terminal Terrestre Lima'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Lima",
        'iti_depa_llegada'=>"Amazonas",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Amazonas'
        ,'iti_terminal_origen'=>'Terminal Terrestre Lima'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>false,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Lima",
        'iti_depa_llegada'=>"Amazonas",
        'iti_service'=>'WIFI'
        ]);
        //
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Ancash'
        ,'iti_terminal_origen'=>'Terminal Terrestre Lima'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Lima",
        'iti_depa_llegada'=>"Ancash",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Apurimac'
        ,'iti_terminal_origen'=>'Terminal Terrestre Lima'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Lima",
        'iti_depa_llegada'=>"Apurimac",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Arequipa'
        ,'iti_terminal_origen'=>'Terminal Terrestre Lima'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Lima",
        'iti_depa_llegada'=>"Arequipa",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Ayacucho'
        ,'iti_terminal_origen'=>'Terminal Terrestre Lima'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Lima",
        'iti_depa_llegada'=>"Ayacucho",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Amazonas'
        ,'iti_terminal_origen'=>'Terminal Terrestre Lima'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Lima",
        'iti_depa_llegada'=>"Amazonas",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Cajamarca'
        ,'iti_terminal_origen'=>'Terminal Terrestre Lima'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Lima",
        'iti_depa_llegada'=>"Cajamarca",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Cuzco'
        ,'iti_terminal_origen'=>'Terminal Terrestre Lima'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Lima",
        'iti_depa_llegada'=>"Cuzco",
        'iti_service'=>'WIFI'
        ]);
        DB::table('itinerarios')->insert(['iti_price'=>90
        ,'iti_terminal_llegada'=>'Terminal Terrestre Huancavelica'
        ,'iti_terminal_origen'=>'Terminal Terrestre Lima'
        ,'iti_salida'=>'2021-05-20 17:45:49',
        'iti_isAvailable'=>true,
        'iti_quantitySeat'=>12,
        'iti_depa_origen'=>"Lima",
        'iti_depa_llegada'=>"Huancavelica",
        'iti_service'=>'WIFI'
        ]);
    }
}
