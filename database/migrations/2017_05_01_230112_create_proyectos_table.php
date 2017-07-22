<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');  
            $table->string('titulo');
            $table->text('descripcion');          
            $table->text('objetivo');
            $table->text('general');
            $table->text('actividad');
            $table->text('perfil_voluntario');
            $table->string('link_imagen');
            $table->string('link_imagen_detalle'); 
            $table->string('link_mercado_pago');

            $table->integer('idTipoProyecto')->unsigned();
            $table->foreign('idTipoProyecto')->references('id')->on('tipoProyectos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
