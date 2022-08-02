<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_solicituds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre');

            $table->unsignedBigInteger('solicitud_id');
             
            $table->foreign('solicitud_id')
                    ->references('id')
                    ->on('solicituds')
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
        Schema::dropIfExists('tipo_solicituds');
    }
}
