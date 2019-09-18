<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCaracteristicasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('caracteristicas', function (Blueprint $table) {
            $table->increments('id', 10);
            $table->string('tipo', 50);
            $table->timestamps();
        });

        Schema::create('articulo_caracteristica', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('articulo_id')->unsigned();
            $table->integer('caracteristica_id')->unsigned();
            $table->string('descripcion');
            $table->foreign('articulo_id')->references('id')->on('articulos');
            $table->foreign('caracteristica_id')->references('id')->on('caracteristicas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('caracteristicas');
    }

}
