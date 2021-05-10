<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('nombre_proyecto');
            //$table->integer('id_empresa')->unsigned();
            $table->foreignId('id_empresa')->references('id')->on('empresas');
            $table->longText('descripcion');
            $table->boolean('cooperativo');
            $table->integer('cupo');
            $table->string('nivel');
            $table->string('carrera');
            $table->string('link_archivo_proyecto');
            $table->boolean('estado');
            $table->string('foto'); 
            $table->string('codigo_proyecto');
            
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
        Schema::dropIfExists('proyectos');
    }
}
