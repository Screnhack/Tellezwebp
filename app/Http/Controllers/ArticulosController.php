<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Articulo;
use App\Imagen;
use App\Categoria;
use App\Marca;
use App\Linea;
use App\Caracteristica;

class ArticulosController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /* Controladores creados para interactuar con la pagina  web donde cada uno de estos son creados como funciones 
      para que logren hacer la iteraccionde cada uno de los procesos */
    public function index(Request $request) {
        $articulos = Articulo::search($request->name)->orderBy('id', 'ASC')->paginate(15);
        $articulos->each(function($articulos) {
            $articulos->categoria;
            $articulos->marca;
            $articulos->lineas;
        });
        return view('admin.articulos.index')
                        ->with('articulos', $articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        /* funcion para crear articulos  donde llama todos las funciones y salva */
        $categorias = Categoria::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $marcas = Marca::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $lineas = Linea::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $caracteristicas = Caracteristica::orderBy('nombre', 'ASC');
        return view('admin.articulos.create')
                        ->with('categorias', $categorias)
                        ->with('marcas', $marcas)
                        ->with('lineas', $lineas)
                        ->with('caracteristica', $caracteristicas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) { /* Recibe un array de archivos para luevo ser manipulado en foreach */
        $files = $request->file('images');
        //almacena la ruta de la carpeta donde se vana  guardar las fotos
        $path = public_path() . '/plugins/images/productos';
        $cont = 0;
        // asigana la relacio para crear el nuevo articulo haciendo un llamado al modelo de Articulo 
        $articulo = new Articulo($request->all());
        //el articulo es guardado
        $articulo->save();
        /* Bucle foreach el cual recibe un array de archivos extraido de la vista de articulos
          es recorrido se almacena con el nombre asignado  se usan la funcion save para que guarde cada archivo  segunsu orden y es movido a la carpeta asignada en la variable path  y luego es assocciado a su articulo */
        foreach ($files as $file) {
            $cont = $cont + 1;
            $name = $articulo->nombre . 'tellez' . $cont . '.' . $file->getClientOriginalExtension();
            $file->move($path, $name);
            $image = new Imagen();
            $image->nombre = $name;
            $image->identificador = $cont;
            $image->articulo()->associate($articulo);
            $image->save();
        }
        //Sincroniza con la tabla pivot o muchos a muchos para que los datos sean almacenados en dichas tablas 
        $articulo->lineas()->sync($request->lineas);
        //envia un mensaje de que a sido guardado de forma exitosa 
        flash('Se ha creado el producto ' . $articulo->nombre . ' de manera exitosa');
        return redirect()->route('admin.articulos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        /* Recoge el id del articulo a editar luego lo busca en la base de datos y envia sus datos a la vista admin.articulo.edit */
        $articulo = Articulo::find($id);
        $articulo->categoria;
        $articulo->marca;
        $categorias = Categoria::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $marcas = Marca::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $lineas = Linea::orderBy('nombre', 'ASC')->lists('nombre', 'id');
        $mislineas = $articulo->lineas->lists('id')->ToArray();
        return view('admin.articulos.edit')
                        ->with('articulo', $articulo)
                        ->with('categorias', $categorias)
                        ->with('marcas', $marcas)
                        ->with('lineas', $lineas)
                        ->with('mislineas', $mislineas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        /* Recibe un id de el articulo a editar lo busca en la base de datos con find  
          luego  hace la actualizacion de la informacion y luego de esto sincroniza los datos con la tabla pivot
          y de esta forma atravez del puglings flash envia un mensaje para de guardado exitoso y recarga a la vista principal */
        $articulo = Articulo::find($id);
        $articulo->fill($request->all());
        $articulo->save();
        $articulo->lineas()->sync($request->lineas);
        flash('Se ha modificado el producto ' . $articulo->nombre . ' de manera exitosa')->warning();
        return redirect()->route('admin.articulos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        /* recibe un id busca el articulo especifico  luego con la funcion delete  el dato es eliminado
          luego se con el puglin flash envia un mensaje a la vista principal para que de esta forma confirme la eliminacion del
          articulo especifico */
        $articulo = Articulo::find($id);
        $articulo->delete();
        flash('Se ha Borrado el producto ' . $articulo->nombre . ' de manera exitosa')->error();
        return redirect()->route('admin.articulos.index');
    }

}
