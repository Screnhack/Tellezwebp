<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/* todos la definiciones son iguales que el modelos articulo */

class Marca extends Model {

    protected $table = 'marcas';
    protected $fillable = ['nombre'];

    public function articulos() {
        return $this->hasMany('App\Articulo');
    }

    public function scopeSearch($query, $name) {
        return $query->where('nombre', 'like', '%' . $name . '%');
    }

}
