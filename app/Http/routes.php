<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Rutas de acceso a la vista principal de la pagina las cuales se encargan de redireccionar 
a las distintas vistas las cuales seran mostradas a los usuarios que ingresen a ver
la pagina web */
Route::get('/',[
	'uses' => 'CatalogoController@inicio',
	'as'   => '/'
]);

/*Toma una variable enviada atravez del metodo get 
en este caso seria la variable nombre, se asigna el 
controlador el cual va a utilizar 
y por ultimo se le asigna un alias a la ruta para que se pueda acceder a estos*/
Route::get('/{nombre}',[
	'uses' => 'CatalogoController@menu',
	'as'   => 'menu.nombre'
]
);

Route::get('catalogo/{id}/productos',[
	'uses' => 'CatalogoController@index',
	'as'   => 'catalogo.productos'
]);

Route::get('catalogo/{id}/show',[
		'uses'=>'CatalogoController@show',
		'as' =>'catalogo.show'
	]);

//forma de llamar una vista mas rapido 
/*
Route::get('customers',function(){
	return view ('customers');
});
Route::get('contacts',function(){
	return view('contacts');
});*/

//RUTAS DEL PANEL DE ADMIISTRACION
//Crea un grupo de rutas y asigna un nombre a este grupo de rutas
/*Creacion del grupo de rutas las cuales se les asignara un middleware para mantener un control de accesos y solo
los usuarios quee se loguen puedan acceder a estas rutas */
Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
	//atravez de resource crea un grupo de rutas para ingresar a su controlador y realizar consultas y cambios 
	/*Se creo un grupo de rutas las cuales cada una esta enlazada un contralador especifico 
	dentro de estas se se desarrollo  el crud => Create, Read, Update, Delete */
	/*Route::get('login',function(){
		return view('admin.login');
	});*/
	Route::get('inicio',function(){
		return view('admin.index');
	});

	Route::resource('users','UsersController');

	Route::get('users/{id}/destroy',[
		'uses' => 'UsersController@destroy',
		'as'   => 'admin.users.destroy'
	]);

	Route::resource('categorias','CategoriasController');

	Route::get('categorias/{id}/destroy',[
		'uses' => 'CategoriasController@destroy',
		'as'   => 'admin.categorias.destroy'
	]);

	Route::resource('marcas','MarcasController');

	Route::get('marcas/{id}/destroy',[
		'uses' => 'MarcasController@destroy',
		'as' =>'admin.marcas.destroy'
	]);

	Route::resource('lineas','LineasController');

	Route::get('lineas/{id}/destroy',[
		'uses'=>'LineasController@destroy',
		'as' =>'admin.lineas.destroy'
	]);

	Route::resource('caracteristicas','CaracteristicasController');

	Route::get('caracteristicas/{id}/destroy',[
		'uses'=>'CaracteristicasController@destroy',
		'as' =>'admin.caracteristicas.destroy'
	]);

	Route::resource('articulos','ArticulosController');

	Route::get('articulos/{id}/destroy',[
		'uses'=>'ArticulosController@destroy',
		'as' =>'admin.articulos.destroy'
	]);

	Route::resource('imagenes','ImagenesController');

	Route::resource('promociones','PromocionesController');

	Route::get('Promociones/{id}/updateStatus',[
		'uses'=>'PromocionesController@updateStatus',
		'as' =>'admin.promociones.updateStatus'
	]);

	Route::get('Promociones/{id}/destroy',[
		'uses'=>'PromocionesController@destroy',
		'as' =>'admin.promociones.destroy'
	]);
});
/*Rutass creadas para controlar el acceso a la pagina se hace uso de 
en estas rutas se controla la autenticacion del usuario  como tambien el logout de el usuario
*/
Route::get('admin/auth/login', [
	'uses'	=>'Auth\AuthController@getLogin',
	'as'	=>'admin.auth.login'
]);
Route::post('admin/auth/login',[
	'uses' 	=>'Auth\AuthController@postLogin',
	'as'	=>'admin.auth.login'
]);
Route::get('admin/auth/logout',[
	'uses' 	=>'Auth\AuthController@getLogout',
	'as'	=>'admin.auth.logout'
]);