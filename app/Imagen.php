<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/* todos la definiciones son iguales que el modelos articulo */

class Imagen extends Model {

    protected $table = 'imagenes';
    protected $fillable = ['nombre', 'articulo_id', 'identificador'];

    public function articulo() {
        return $this->belongsTo('App\Articulo');
    }

    public function scopeSearch($query, $name) {
        return $query->where('nombre', 'like', '%' . $name . '%');
    }

}
