<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasajesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasajes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('iti_id');
            $table->integer('pas_numero_asiento')->unsigned();
            $table->enum('pas_estado_pasaje',['Disponible','Comprado','Reservado','Ocupado','Efectuado'])->default('Disponible');
            $table->double('pas_costo',6,2)->unsigned();
            $table->dateTime('pas_fecha_pasaje');
            $table->foreign('iti_id')->references('id')->on('itinerarios')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('pasajes');
    }
}
