<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'genre' => 'required',
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|integer',
        ]);

        Book::create($request->all());
        return redirect()->route('books.index')->with('success', 'Livro cadastrado com sucesso.');
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required',
            'genre' => 'required',
            'title' => 'required',
            'author' => 'required',
            'year' => 'required|integer',
        ]);

        $book->update($request->all());
        return redirect()->route('books.index')->with('success', 'Livro atualizado com sucesso.');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Livro deletado com sucesso.');
    }
}

