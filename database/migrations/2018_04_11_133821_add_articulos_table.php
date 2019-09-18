<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddArticulosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50)->unique();
            $table->string('descripcion');
            $table->integer('categoria_id')->unsigned();
            $table->integer('marca_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('articulo_linea', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('articulo_id')->unsigned();
            $table->integer('linea_id')->unsigned();
            $table->foreign('articulo_id')->references('id')->on('articulos')->onDelete('cascade');
            $table->foreign('linea_id')->references('id')->on('lineas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('articulos');
    }

}
