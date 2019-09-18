<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Linea;

class LineasController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $lineas = Linea::search($request->nombre)->orderBy('id', 'ASC')->paginate(15);
        return view('admin.lineas.index')->with('lineas', $lineas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.lineas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $linea = new Linea($request->all());
        $linea->save();
        flash('La linea ' . $linea->nombre . ' fue creada de manera exitosa');
        return redirect()->route('admin.lineas.index');
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
        $linea = Linea::find($id);
        return view('admin.lineas.edit')->with('linea', $linea);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $linea = Linea::find($id);
        $linea->nombre = $request->nombre;
        $linea->descripcion = $request->descripcion;
        $linea->save();
        flash('La Linea ' . $linea->nombre . ' fue modificada de manera exitosa')->warning();
        return redirect()->route('admin.lineas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $linea = Linea::find($id);
        $linea->delete();
        flash('La Linea ' . $linea->nombre . ' fue eliminada de manera exitosa')->error();
        return redirect()->route('admin.lineas.index');
    }

}
