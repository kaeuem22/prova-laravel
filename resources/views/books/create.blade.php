@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h1>Criar Produto</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">
                <label for="titulo">Titulo</label>
                <input type="text" class="form-control" name="titulo">
                @error('titulo')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="resumo">Resumo</label>
                <input type="text" class="form-control" name="resumo">
                @error('resumo')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
                <div class="row">
            <div class="col-6">
                <label for="data_pub">Data de Publicação</label>
                <input type="date" class="form-control" name="data_pub">
                @error('data_pub')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row">
        <div class="col-6">
                <label for="preco">Preço</label>
                <input type="number" step="0.01" class="form-control" name="preco">
                @error('preco')
                <span class="text-danger">{{ $message }}</span>
                @enderror
        </div>
        </div>
        <div class="row">
        <div class="col-6">
                <label for="genre_id">Gênero</label>
                <select class="form-control" name="genre_id">
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->nome }}</option>
                    @endforeach
                </select>
            </div>
            </div>
            <div class="row">
            <div class="col-6">
                <label for="author_id">Categoria</label>
                <select class="form-control" name="author_id">
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6">
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection