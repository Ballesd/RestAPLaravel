<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlumnosMateria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos_materia', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('alumno_id')
                ->nullable()
                ->constrained('alumnos')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('materia_id')
                ->nullable()
                ->constrained('materias')
                ->cascadeOnUpdate()
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
