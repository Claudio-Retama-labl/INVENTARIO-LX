<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('serial');
            $table->string('modelo');
            $table->string('especificaciones');
            $table->string('color');
            $table->string('numero_caja');
            $table->bigInteger('categorias_id')->unsigned()->index()->nullable();
            $table->foreign('categorias_id')->references('id')->on('categorias')->onDelete('cascade'); 

            $table->bigInteger('dependencias_id')->unsigned()->index()->nullable();
            $table->foreign('dependencias_id')->references('id')->on('dependencias')->onDelete('cascade'); 
            
            $table->bigInteger('financiamiento_id')->unsigned()->index()->nullable();
            $table->foreign('financiamiento_id')->references('id')->on('financiamientos')->onDelete('cascade'); 
            

            $table->bigInteger('personal_id')->unsigned()->index()->nullable();
            $table->foreign('personal_id')->references('id')->on('personals')->onDelete('cascade'); 

            $table->string('estado_bien');
            $table->tinyInteger('estado')->default(1);
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
        Schema::dropIfExists('articulos');
    }
};
