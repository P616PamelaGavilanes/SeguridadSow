<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    private function validador(array $datos)
    {
        return Validador::make($datos,[
            'nombre' => ['required','max:25','string'],
            'descripcion' => ['nullable','string'],//no es requerida
            'imagen' => ['nullable','string'],//no es requerida
        ]);
    }
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index',compact('categorias'));
    }
    public function create()
    {
        return view('categorias.create');
    }
    public function store(Request $request)
    {
         //guardar
        $valida =$this->validador($request->all());
        Categoria::create($valida);
        return view('categorias.index');
    }
    public function show(Categoria $categoria)
    {
        return view('categorias.show',compact('categoria'));
    }
    public function edit(Categoria $categoria)
    {
        return view('categorias.edit',compact('categoria'));
    }
    public function update(Request $request, Categoria $categoria)
    {
        $valida =$this->validador($request->all());
        $categoria->nombre = $valida['nombre'];
        $categoria->descripcion = $valida['descripcion'];
        $categoria->imagen = $valida['imagen'];
        $categoria->update();
        return view('categorias.edit');
    }
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return view('categorias.index');
    }
}
