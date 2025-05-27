@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h1>Cadastrar Funcionário</h1>
    <form action="{{ route('employees.store') }}" method="POST">
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
        <div class="row">
            <div class="col-6">
                <label for="cpf">CPF</label>
                <input type="number" class="form-control" name="cpf">
                @error('cpf')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
                <div class="row">
            <div class="col-6">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="data_nasc">Data de Nascimento</label>
                <input type="date" class="form-control" name="data_nasc">
                @error('data_nasc')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" name="estado">
                @error('estado')
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