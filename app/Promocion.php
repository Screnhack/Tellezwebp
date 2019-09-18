<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model {

    protected $table = 'promociones';
    protected $fillable = ['nombre', 'articulo_id', 'porcentaje', 'descripcion', 'imagen'];

    public function articulo() {
        return $this->belongsTo('App\Articulo');
    }

}
