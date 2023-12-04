<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function principal(){
        return view('home');
    }
    public function index()
    {
        $categoria = Categoria::where('estado', 1)->get();
        return view("categoria", compact('categoria'));
    }

    public function registrar(Request $request){
        $autor = new Categoria();
        $autor->categoria = $request->categoria;
        $autor->save();
        return back();
    }
}
