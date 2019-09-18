<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;
use App\Promocion;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PromocionesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $promociones = Promocion::orderBy('id', 'ASC')->paginate(15);
        $promociones->each(function($promociones) {
            $promociones->articulo;
        });
        return view('admin.promociones.index')
                        ->with('promociones', $promociones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $articulos = Articulo::orderBy('nombre', "ASC")->lists('nombre', 'id');
        return view('admin.promociones.create')
                        ->with('articulos', $articulos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $file = $request->file('imagenpromo');
        //$name=$articulo->nombre.'tellez'.$cont.'.'.$file->getClientOriginalExtension();
        $path = public_path() . '/plugins/images/promociones';
        $name = "promocion_" . time() . "." . $file->getClientOriginalExtension();
        $file->move($path, $name);
        $promocion = new Promocion();
        $promocion->nombre = $request->nombre;
        $promocion->articulo_id = $request->articulo_id;
        $promocion->porcentaje = $request->porcentaje;
        $promocion->descripcion = $request->descripcion;
        $promocion->imagen = $name;
        $promocion->save();
        flash('La promocion ' . $promocion->nombre . ' fue creada de manera exitosa');
        return redirect()->route('admin.promociones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $promocion = Promocion::find($id);
        $promocion->articulo;
        $articulos = Articulo::orderBy('nombre', "ASC")->lists('nombre', 'id');

        return view('admin.promociones.edit')
                        ->with('promocion', $promocion)
                        ->with('articulos', $articulos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $promocion = Promocion::find($id);
        $promocion->nombre = $request->nombre;
        $promocion->descripcion = $request->descripcion;
        $promocion->save();
        flash('La Promocion ' . $promocion->nombre . ' fue modificada de manera exitosa')->warning();
        return redirect()->route('admin.promociones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $promocion = Promocion::find($id);
        $promocion->delete();
        flash('La Promocion ' . $promocion->nombre . ' fue eliminada de manera exitosa')->error();
        return redirect()->route('admin.promociones.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateStatus($id) {
        $promocion = Promocion::find($id);
        if ($promocion->estado == "0") {
            $promocion->estado = '1';
        } else {
            $promocion->estado = '0';
        }
        $promocion->save();
        return redirect()->route('admin.promociones.index');
    }

}
