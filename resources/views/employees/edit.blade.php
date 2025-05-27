@extends('layouts.master')
@section('content')
<div class="container mt-5">
    <h1>Editar Funcionário</h1>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome"  value="{{ $employee->nome }}">
                @error('nome')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="cpf">CPF</label>
                <input type="number" class="form-control" name="cpf" value="{{ $employee->cpf }}">
                @error('cpf')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
                <div class="row">
            <div class="col-6">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{ $employee->email }}">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="data_nasc">Data de Nascimento</label>
                <input type="date" class="form-control" name="data_nasc" value="{{ $employee->data_nasc }}">
                @error('data_nasc')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" name="estado" value="{{ $employee->estado }}">
                @error('estado')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>
@endsection
