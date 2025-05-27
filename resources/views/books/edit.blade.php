@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h1>Editar Produto</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" name="titulo" value="{{ $book->titulo }}">
                @error('titulo')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="resumo">Resumo</label>
                <input type="text" class="form-control" name="resumo" value="{{ $book->resumo }}">
                @error('resumo')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
                <div class="row">
            <div class="col-6">
                <label for="data_pub">Data de Publicação</label>
                <input type="date" class="form-control" name="data_pub" value="{{ $book->data_pub }}">
                @error('data_pub')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row">
        <div class="col-6">
                <label for="preco">Preço</label>
                <input type="number" step="0.01" class="form-control" name="preco" value="{{ $book->preco }}">
                @error('preco')
                <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>
        </div>
        <div class="form-group">
        <label for="genre_id">Gênre</label>
            <select class="form-control" name="genre_id">
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}" 
                        {{ $genre->id == $book->genre_id ? 'selected' : '' }}>
                        {{ $genre->nome }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
        <label for="author_id">Autor</label>
            <select class="form-control" name="author_id">
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" 
                        {{ $author->id == $book->author_id ? 'selected' : '' }}>
                        {{ $author->nome }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
@endsection
