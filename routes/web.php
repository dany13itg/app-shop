<?php

Route::get('/', 'TestController@welcome');

/*ruta por default
Route::get('/', function () {
return view('welcome');
});*/

/*ruta de prueba llamando a vista en url /prueba
Route::get('/prueba', function(){
	return 'Hola soy la ruta prueba';
});
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/products/index', 'ProductController@index'); 	//listado
Route::get('/admin/products/create', 'ProductController@create');		//formulario
Route::post('/admin/products', 'ProductController@store');			//registrar

//CR
