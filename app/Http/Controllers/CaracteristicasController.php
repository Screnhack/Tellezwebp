<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Caracteristica;

class CaracteristicasController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $caracteristicas = Caracteristica::orderBy('id', 'ASC')->paginate(15);
        return view('admin.caracteristicas.index')->with('caracteristicas', $caracteristicas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('admin.caracteristicas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $caracteristica = new Caracteristica($request->all());
        $caracteristica->save();
        flash('La Caracteristica ' . $caracteristica->tipo . ' fue guardada de manera exitosa');
        return redirect()->route('admin.caracteristicas.index');
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
        $caracteristica = Caracteristica::find($id);

        return view('admin.caracteristicas.edit')->with('caracteristica', $caracteristica);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $caracteristica = Caracteristica::find($id);
        $caracteristica->tipo = $request->tipo;
        $caracteristica->descripcion = $request->descripcion;
        $caracteristica->save();
        flash('La Caracteristica ' . $caracteristica->tipo . ' fue modificada de manera exitosa')->warning();
        return redirect()->route('admin.caracteristicas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $caracteristica = Caracteristica::find($id);
        $caracteristica->delete();
        flash('La Caracteristica ' . $caracteristica->tipo . ' fue eliminada de manera exitosa')->error();
        return redirect()->route('admin.caracteristicas.index');
    }

}
