@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h1>Criar Gênero</h1>
    <form action="{{ route('genres.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome">
                @error('nome')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-6">
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>
    </form>
</div>
@endsection