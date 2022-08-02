<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividads', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('numero')->nullable();
            $table->string('nombre')->nullable();
            $table->integer('valor_hora')->nullable();
            $table->integer('horas_estimadas')->nullable();
            $table->integer('costo')->nullable();
            $table->string('estado')->nullable();

            $table->unsignedBigInteger('modulo_id');
             
            $table->foreign('modulo_id')
                    ->references('id')
                    ->on('modulos')
                    ->onDelete('cascade');

                    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividads');
    }
}
