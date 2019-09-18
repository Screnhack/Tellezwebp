<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/* todos la definiciones son iguales que el modelos articulo */

class Caracteristica extends Model {

    protected $table = 'caracteristicas';
    protected $fillable = ['tipo', 'descripcion'];

    public function articulos() {
        return $this->belongsToMany('App\Articulo');
    }

}
