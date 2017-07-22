<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('titulo');
            $table->text('texto');
            $table->string('nombre_creador');   
            $table->text('link_imagen'); 
            $table->text('link_facebook');      
            $table->text('link_twitter');  
            $table->dateTime('fechaPublicacion');   

            $table->integer('idTipoCategoriaBlog')->unsigned();
            $table->foreign('idTipoCategoriaBlog')->references('id')->on('tipo_categoria_blogs');       
            
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
        Schema::dropIfExists('blogs');
    }
}
