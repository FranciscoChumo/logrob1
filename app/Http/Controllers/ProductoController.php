<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    
    
    public function index()
    {
        $categoria = Categoria::where('estado', 1)->get();
        return view('producto', compact('categoria'));   
    }

    
    public function saveProducto(Request $request){
        $datos = new Producto();
        $datos->nombre = $request->nombre;
        $datos->fecha = $request->fecha;
        $datos->precio = $request->cantidad;
        $datos->cantidad = $request->cantidad;
        $datos->estado = true;
        $datos->producto_id = $request->id_categoria;
        $datos->save();
        return back();
    }
    public function mostrar(){
        $categoria = Categoria::where('estado', 1)->get();
        $productos = DB::table('productos')
        ->join('categorias', 'producto_id', '=', 'categorias.id')
        ->where('productos.estado', 1)
        ->select('productos.*', 'categorias.categoria')
        ->get();
         return view('tabla',compact('productos', 'categoria'));
    }

    public function filtrar(Request $request){
        $categoria = Categoria::where('estado', 1)->get();
        $productos = DB::table('productos')
        ->join('categorias', 'producto_id', '=', 'categorias.id')
        ->where('productos.estado', 1)
        ->where('categorias.id', '=', $request->datoFiltrado)
        ->select('productos.*', 'categorias.categoria')
        ->get();
        return view('tabla',compact('productos', 'categoria'));
    }
    public function eliminar($id){
        $producto = Producto::find($id);
        if($producto){
            $producto->estado = false;
            $producto->save();
            return back();
        }

    }

    
}
