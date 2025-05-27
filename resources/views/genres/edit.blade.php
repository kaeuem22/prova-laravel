@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h1>Editar Gênero</h1>
    <form action="{{ route('genres.update', $genre->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">            
            <label for="nome">Nome</label>
            <input type="text" class="form-control"
            name="nome" value="{{ $genre->nome }}">
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
@endsection
