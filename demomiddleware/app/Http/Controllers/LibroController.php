<?php
namespace App\Http\Controllers;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    private function validador(array $datos)
    {
        return Validador::make($datos,[
            'titulo' => ['required','max:25','string'],
            'descripcion' => ['nullable','string'],//no es requerida
            'autor' => ['required','string'],//no es requerida
            'anio'=> ['required','max:25','string'],
        ]);
    }
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index',compact('libros'));
    }
    public function create()
    {
        return view('libros.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => ['required'],
            'descripcion'=> ['alpha_num'],
            'autor'=> ['required'],
            'anio'=> ['numeric','required']

        ],[
            'required' => 'El :attribute es requerido',
            'anio'=>'Solo numeros',
            'alpha_num'=>'Solo se permite numeros y letras'
        ]);
        Libro::create($request->all());
        return redirect(route('libros.index'));
    }
    public function show(int $id)
    {
        $libro = Libro::find($id); 
        if (! $libro) {
            return redirect(route('libros.index'));
        }
        return view('libros.show',compact('libro'));
        
    }

    public function destroy(int $id)
    {
        $libro = Libro::find($id);
        $libro->delete();
        return redirect(route('libros.index'));
    }
}
