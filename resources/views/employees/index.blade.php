<!-- @extends('layouts.master') -->
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Funcionario</h1>
    <div class="text-right">
        <a href="{{ route('employees.create') }}" class="btn btn-primary">Adicionar Funcionario</a>
    </div>
   
    <div>
<div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data Nasc.</th>
                <th>Pais</th>
                <th>Estado</th>
            </tr>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->nome }}</td>
                <td>{{ $employee->cpf }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->data_nasc }}</td>
                <td>{{ $employee->estado }}</td>
                <td><a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Editar</a>
                    <form style="display: inline;" action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Tem certeza que deseja excluir esse funcionário?')">
                            Excluir
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
</div>
@endsection