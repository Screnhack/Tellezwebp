<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPromocionesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('promociones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->integer('articulo_id')->unsigned();
            $table->integer('porcentaje');
            $table->string('descripcion', 100);
            $table->string('imagen', 255);
            $table->boolean('estado')->default(1);
            $table->foreign('articulo_id')->references('id')->on('articulos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('promociones');
    }

}
