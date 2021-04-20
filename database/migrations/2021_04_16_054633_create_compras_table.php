<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('use_id');
            $table->unsignedBigInteger('pas_id');
            
            $table->double('com_monto_compra',6,2)->unsigned();
            $table->dateTime('com_fecha_compra');

            $table->foreign('use_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pas_id')->references('id')->on('pasajes')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('compras');
    }
}
