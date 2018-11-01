<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;


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

      $products= product::all();

   	return view('welcome')->with(compact('products'));
   }
}
