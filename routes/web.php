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
