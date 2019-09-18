<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Marca;

class MarcasController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $marcas = Marca::search($request->name)->orderBy('id', 'ASC')->paginate(15);
        return view('admin.marcas.index')->with('marcas', $marcas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $marca = new Marca($request->all());
        $marca->save();
        flash('La Marca ' . $marca->nombre . ' fue guardada de manera exitosa')->success();
        return redirect()->route('admin.marcas.index');
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
        $marca = Marca::find($id);
        return view('admin.marcas.edit')->with('marca', $marca);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $marca = Marca::find($id);
        $marca->nombre = $request->nombre;
        $marca->save();
        flash('La Marca ' . $marca->nombre . ' fue modificada de manera exitosa')->warning();
        return redirect()->route('admin.marcas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $marca = Marca::find($id);
        $marca->delete();
        flash('La Marca ' . $marca->nombre . ' fue eliminada de manera exitosa')->error();
        return redirect()->route('admin.marcas.index');
    }

}
