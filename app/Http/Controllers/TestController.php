<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
   /*CONTROLADOR LLAMADO POR LA VISTA, LARAVEL
   OBEDECE AL CONTROLADOR YA NO A LA VIEW WELCOME POR DEFAULT
   public function welcome(){
   	$a=5;
   	$b=10;
   	$c=$a+$b;
   	return "El valor de la suma es $c";
   }*/
   public function welcome(){
   	return view('welcome');
   }
}
