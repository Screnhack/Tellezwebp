<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Categoria;

class CategoriasController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $categorias = Categoria::search($request->name)->orderBy('id', 'asc')->paginate(5);
        return view('admin.categorias.index')->with('categorias', $categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $categoria = new Categoria($request->all());
        $categoria->save();
        flash('La categoria ' . $categoria->nombre . ' fue guardada de manera exitosa')->success();
        return redirect()->route('admin.categorias.index');
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
        $categoria = Categoria::find($id);
        return view('admin.categorias.edit')->with('categoria', $categoria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->nombre;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
        flash('la categoria ' . $categoria->nombre . ' fue modificada exitosamente')->warning();
        return redirect()->route('admin.categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $categoria = Categoria::find($id);
        $categoria->delete();
        flash('la categoria ' . $categoria->nombre . ' fue eliminada de manera exitosa')->error();
        return redirect()->route('admin.categorias.index');
    }

}
