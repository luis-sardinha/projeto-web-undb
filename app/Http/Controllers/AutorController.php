<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index()
    {
        $autores = Autor::with('livros')->get();
        return response()->json($autores);
    }

    public function store(Request $request)
    {
        $autor = Autor::create($request->all());
        return response()->json($autor, 201);
    }

    public function show($id)
    {
        $autor = Autor::with('livros')->find($id);
        if ($autor) {
            return response()->json($autor);
        }
        return response()->json(['message' => 'Autor não encontrado'], 404);
    }

    public function update(Request $request, $id)
    {
        $autor = Autor::find($id);
        if ($autor) {
            $autor->update($request->all());
            return response()->json($autor);
        }
        return response()->json(['message' => 'Autor não encontrado'], 404);
    }

    public function destroy($id)
    {
        $autor = Autor::find($id);
        if ($autor) {
            $autor->delete();
            return response()->json(['message' => 'Autor deletado']);
        }
        return response()->json(['message' => 'Autor não encontrado'], 404);
    }
}

