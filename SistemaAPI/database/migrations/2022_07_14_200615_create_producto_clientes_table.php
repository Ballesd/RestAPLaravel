<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_clientes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')
                ->nullable()
                ->constrained('clientes')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('productos_id')
                ->nullable()
                ->constrained('productos')
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
        Schema::dropIfExists('producto_clientes');
    }
}
