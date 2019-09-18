<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\FLash;
use App\User;

class UsersController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $users = User::search($request->name)->orderBy('id', 'ASC')->paginate(15);
        return view('admin.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request) {
        //dd es el helper que muestra los datos y el all los muestra en forma resumida lo que resive
        //dd($request->all());

        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        flash('El Usuario ' . $user->name . ' fue registrado Exitosamente')->success();
        return redirect()->route('admin.users.index');
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

        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //dd($request->all());

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->tipo = $request->tipo;
        $user->password = bcrypt($request->password);
        $user->save();
        flash('Las modificaciones fueron exitosas en el usuario ' . $user->name)->warning();
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        flash('El usuario' . $user->name . 'fue eliminado de manera exitosa')->error();
        return redirect()->route('admin.users.index');
    }

}
