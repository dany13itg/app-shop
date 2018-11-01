<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{
    public function index()
    {
    	$products = product::paginate(10);
    	return view('admin.products.index')->with(compact('products'));	//listado
    }

    public function create()
    {
    	return view('admin.products.create');    //formulario de registro
    }

    public function store(Request $request)			//registrar el nuevo producto en la table de bd
    {
    	 /*ver en array el registro*/ //dd($request->all());
    		$product= new product();
    		$product->name=$request->input('name');
            $product->description=$request->input('description');
            $product->price=$request->input('price');
            $product->long_description=$request->input('long_description');
            $product->save();

            return redirect('/admin/products');
    }
}
