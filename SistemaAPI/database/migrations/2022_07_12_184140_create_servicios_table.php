<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->timestamp('FechaIngreso')->useCurrent = true;
            $table->text('Description',300);
            $table->integer('Price');

            $table->foreignId('Proveedors_id')
                    ->nullable()
                    ->constrained('proveedors') //INTEGRIDAD REFENCIAL
                    ->cascadeOnUpdate() //Actilización en cascada 
                    ->nullOnDelete(); // Eliminación nula
                    /*La eliminación en casacada borra los registros de la tabla dependiente
                    cuando se borran lso registros de la tabla principal o la actualiza.
                    El set null pone null en el campo.
                    */ 
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
        Schema::dropIfExists('servicios');
    }
}
