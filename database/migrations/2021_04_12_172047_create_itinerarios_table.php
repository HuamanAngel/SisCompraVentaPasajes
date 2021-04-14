<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItinerariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itinerarios', function (Blueprint $table) {
            $table->id();
            $table->double('iti_price',6,2)->unsigned();
            $table->string('iti_terminal_llegada');
            $table->string('iti_terminal_origen');
            $table->dateTime('iti_salida');
            $table->boolean('iti_isAvailable')->default(false);
            $table->integer('iti_quantitySeat')->nullable(0);
            $table->enum('iti_service',['Ninguno','WIFI','TV','Baño'])->default('Ninguno');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itinerarios');
    }
}
