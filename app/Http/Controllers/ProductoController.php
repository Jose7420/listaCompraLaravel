<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\ProductoUser;




    class ProductoController extends Controller
{


    //

    public function getIndex(){

        $productos = Producto::all();
        return view('productos.index',array('arrayProductos'=>$productos));
    }

    public function getCategoria($categoria){

        $productos = Producto::where('categoria','like',($categoria))->get();
        return view('productos.index',array('arrayProductos'=>$productos));
    }



    public function getShow($id){

        $producto = Producto::findOrFail($id);

        return view('productos.show', array('producto'=>$producto));
    }

    public function getCreate(){
        return view('productos.create');
    }

    public function getEdit($id){
        $producto = Producto::findOrFail($id);

        return view('productos.edit', array('producto'=>$producto));

    }

    public function postCreate(Request $request){

        $productoNuevo = new Producto();

        $productoNuevo->nombre = $request->input('nombre');
        $productoNuevo->precio=$request->input('precio');
        $productoNuevo->categoria = $request->input('categoria');
        $productoNuevo->imagen=$request->input('imagen');
        $productoNuevo->save();

        $url = action([ProductoController::class, 'getIndex']);
        return redirect($url);


    }

    public function putEdit(Request $request,$id){

        $producto = Producto::findOrFail($id);

        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->input('categoria');
        $producto->descripcion= $request->input('descripcion');
        $producto->imagen = $request->input('imagen');
        $producto->save();

        $url = action([ProductoController::class, 'getShow'],['id' =>$id]);
        return redirect($url);



    }

    public function putComprar(Request $request, $id){

        $productoNuevo = new ProductoUser();

        $productoNuevo->producto_id = $id;
        $productoNuevo->user_id = "1";

        $productoNuevo->save();


        // $producto = Producto::findOrFail($id);

        // $producto->pendiente = $request->input('comprar');
        // $producto->save();

        $url = action([ProductoController::class, 'getShow'],['id' =>$id]);
        return redirect($url);



    }


}
