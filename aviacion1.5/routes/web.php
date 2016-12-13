<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*		Grupo de rutas para usuarios logeados		*/
Route::group(['middleware' => 'auth'], function () {

	/**    Grupo de rutas para administradores   **/
	Route::group(['middleware' => 'administrador'], function () {
		
		route::resource('user','UserController');
		Route::get('/user/{id}/eliminar',
		[
		'as'=>'user.eliminar',
		'uses' => 'UserController@destroy'
		]);

	});
	/*   reporte de pdf    */
	Route::get('/pdf/{id}',
	[
	'as'=>'pdf',
	'uses' => 'pruebaController@show'
	]);
	/*   rutas    */

	Route::get('/', function () {
	    return view('welcome');
	});

	route::resource('aprendiz','AprendizController');

	Route::get('/aprendiz/{id}/certificar/{ficha}',
	[
	'as'=>'aprendiz.certificar',
	'uses' => 'AprendizController@certificar'
	]);

	Route::get('/notas', function () {
	    return view('formularios.notas');
	});

	route::resource('programa','ProgramaController');

	route::resource('competencia','CompetenciaController');
	Route::get('/competencia/{id}/create',
	[
	'as'=>'competencia.create',
	'uses' => 'CompetenciaController@create'
	]);	

	route::resource('instructor','InstructorController');

	route::resource('ficha','FichaController');

	Route::get('/ficha/{id}/matricula',
	[
	'as'=>'ficha.matricula',
	'uses' => 'FichaController@matricula'
	]);
	Route::get('/ficha/{id}/matricular/{ficha}',
	[
	'as'=>'ficha.registrar',
	'uses' => 'FichaController@registrar_matriculas'
	]);

	Route::get('/competenc', function(){
		return view('formularios.competencias');
	});

	Route::get('/asignatura', function(){
		return view('formularios.asignatura');
	});
	route::resource('matriculas','MatriculaController');

	Route::get('/listar',
	[
	'as'=>'listar',
	'uses' => 'listarController@index'
	]);
	
/*** rutas ajax ***/

	Route::get('/listado/{id}/{buscar?}',
	[
	'as'=>'verlistado',
	'uses' => 'listarController@buscar'
	]);
	Route::get('/lista/{tabla}',
	[
	'as'=>'verlista',
	'uses' => 'listarController@show'
	]);
	Route::get('/matricula/{id}',
	[
	'as'=>'listar_matriculas',
	'uses' => 'listarController@listar_matriculas'
	]);
	Route::get('/fichalistar/{id}',
	[
	'as'=>'fichalistar',
	'uses' => 'FichaController@show'
	]);
/** ajax **/
});

Auth::routes();

Route::get('/home', 'HomeController@index');
