<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




    class ProductoController extends Controller
{


    //

    public function getIndex(){

        return view('productos.index',array('arrayProductos'=>self::$arrayProductos));
    }


    public function getShow($id){

        return view('productos.show', array('producto'=>self::$arrayProductos[$id-1],'id'=>$id));
    }

    public function getCreate(){
        return view('productos.create');
    }

    public function getEdit($id){

        return view('productos.edit', array('producto'=>self::$arrayProductos[$id-1],'id'=>$id));

    }


}
