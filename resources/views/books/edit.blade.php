@extends('layouts.app')

@section('content')
    <h1>Editar Livro</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" value="{{ $book->name }}" required>
        </div>
        <div>
            <label for="genre">Gênero:</label>
            <input type="text" id="genre" name="genre" value="{{ $book->genre }}" required>
        </div>
        <div>
            <label for="title">Título:</label>
            <input type="text" id="title" name="title" value="{{ $book->title }}" required>
        </div>
        <div>
            <label for="author">Autor:</label>
            <input type="text" id="author" name="author" value="{{ $book->author }}" required>
        </div>
        <div>
            <label for="year">Ano:</label>
            <input type="number" id="year" name="year" value="{{ $book->year }}" required>
        </div>
        <button type="submit">Atualizar</button>
    </form>
@endsection
