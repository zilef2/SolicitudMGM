<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procesos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('nombre');
        });
        Schema::table('actividads', function (Blueprint $table) {
            $table->unsignedBigInteger('historia_usuarios_id');
            $table->foreign('historia_usuarios_id')
                    ->references('id')
                    ->on('historia_usuarios')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('proceso_id');
                
            $table->foreign('proceso_id')
                    ->references('id')
                    ->on('procesos')
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
        Schema::dropIfExists('procesos');
    }
}
