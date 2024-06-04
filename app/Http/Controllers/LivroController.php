<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::with('autor')->get();
        return response()->json($livros);
    }

    public function store(Request $request)
    {
        $livro = Livro::create($request->all());
        return response()->json($livro, 201);
    }

    public function show($id)
    {
        $livro = Livro::with('autor')->find($id);
        if ($livro) {
            return response()->json($livro);
        }
        return response()->json(['message' => 'Livro não encontrado'], 404);
    }

    public function update(Request $request, $id)
    {
        $livro = Livro::find($id);
        if ($livro) {
            $livro->update($request->all());
            return response()->json($livro);
        }
        return response()->json(['message' => 'Livro não encontrado'], 404);
    }

    public function destroy($id)
    {
        $livro = Livro::find($id);
        if ($livro) {
            $livro->delete();
            return response()->json(['message' => 'Livro deletado']);
        }
        return response()->json(['message' => 'Livro não encontrado'], 404);
    }
}

