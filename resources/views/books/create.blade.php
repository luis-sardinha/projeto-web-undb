@extends('layouts.app')

@section('content')
    <h1>Cadastrar Livro</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="genre">Gênero:</label>
            <input type="text" id="genre" name="genre" required>
        </div>
        <div>
            <label for="title">Título:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="author">Autor:</label>
            <input type="text" id="author" name="author" required>
        </div>
        <div>
            <label for="year">Ano:</label>
            <input type="number" id="year" name="year" required>
        </div>
        <button type="submit">Cadastrar</button>
    </form>
@endsection
