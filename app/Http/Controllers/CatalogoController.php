<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Articulo;
use App\Imagen;
use App\Categoria;
use App\Promocion;
use DB;

class CatalogoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id) {
        $articulos = Articulo::orderBy('id', 'ASC')->paginate(50);
        $categorias = Categoria::orderBy('nombre', 'ASC')->get();
        $articulos->each(function($articulos) {
            $articulos->imagenes;
        });
        return view('catalogo')
                        ->with('articulos', $articulos)
                        ->with('categorias', $categorias)
                        ->with('id_categoria', $id);
    }

    public function inicio() {
        $categorias = Categoria::orderBy('nombre', 'ASC')->get();
        $promociones = Promocion::orderBy('nombre', 'ASC')->get();
        return view('home')->with('categorias', $categorias)
                        ->with('promociones', $promociones);
    }

    public function show($id) {
        $articulo = Articulo::find($id);
        $categorias = Categoria::orderBy('nombre', 'ASC')->get();
        return view('galeria')->with('articulo', $articulo)
                        ->with('categorias', $categorias);
    }

    public function menu($menu) {
        $categorias = Categoria::orderBy('nombre', 'ASC')->get();
        switch ($menu) {
            case 'nosotros':
                return view('nosotros')->with('categorias', $categorias);
                break;
            case 'customers':
                return view('customers')->with('categorias', $categorias);
                break;
            case 'contacts':
                return view('contacts')->with('categorias', $categorias);
                break;
            case 'catalogo':
                return redirect()->route('catalogo.muestra');
                break;
            case 'politics':
                return view('politics')->with('categorias', $categorias);
        }
    }

}
