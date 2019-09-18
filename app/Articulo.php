<?php

namespace App;

/* Todos los modelos estan definidos de la misma forma */

use Illuminate\Database\Eloquent\Model;

/* Modelo de articulos donde se asigna la tabla de la base de datos a usar */

class Articulo extends Model {

    protected $table = 'articulos';
    /* campos que seran  traidos de la base de datos para generar la interaccion */
    protected $fillable = ['nombre', 'descripcion', 'categoria_id', 'marca_id'];

    /* funciones de relaciones en la base de datos para facilitar el acceso a las diferentes tablads */

    public function categoria() {
        return $this->belongsTo('App\Categoria');
    }

    public function marca() {
        return $this->belongsTo('App\Marca');
    }

    public function lineas() {
        return $this->belongsToMany('App\Linea');
    }

    public function caracteristicas() {
        return $this->belongsToMany('App\Caracteristica');
    }

    public function imagenes() {
        return $this->hasMany('App\Imagen');
    }

    public function promociones() {
        return $this->hasMany('App\Promocion');
    }

    /* Scope o buscador para generar una consulta donde se puedan mostrar los articulo por el nombre q se busque */

    public function scopeSearch($query, $name) {
        return $query->where('nombre', 'like', '%' . $name . '%');
    }

}
