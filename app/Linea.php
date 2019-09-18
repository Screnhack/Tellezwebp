<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/* todos la definiciones son iguales que el modelos articulo */

class Linea extends Model {

    protected $table = 'lineas';
    protected $fillable = ['nombre', 'descripcion'];

    public function articulos() {
        return $this->belongsToMany('App\Articulo');
    }

    public function scopeSearch($query, $name) {
        return $query->where('nombre', 'like', '%' . $name . '%');
    }

}
