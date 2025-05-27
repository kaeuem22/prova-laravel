<!-- @extends('layouts.master') -->
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Autores</h1>
    <div class="text-right">
        <a href="{{ route('authors.create') }}" class="btn btn-primary">Adicionar Autor</a>
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
            @foreach($authors as $author)
            <tr>
                <td>{{ $author->nome }}</td>
                <td>{{ $author->cpf }}</td>
                <td>{{ $author->data_nasc }}</td>
                <td>{{ $author->pais }}</td>
                <td>{{ $author->estado }}</td>
                <td><a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning">Editar</a>
                    <form style="display: inline;" action="{{ route('authors.destroy', $author->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Tem certeza que deseja excluir esse autor?')">
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