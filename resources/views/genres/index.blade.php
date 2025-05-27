<!-- @extends('layouts.master') -->
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Gênero</h1>
    <div class="text-right">
        <a href="{{ route('genres.create') }}" class="btn btn-primary">Adicionar Gênero</a>
    </div>
   
    <div>
<div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th>Nome</th>
            </tr>
            @foreach($genres as $genre)
            <tr>
                <td>{{ $genre->nome }}</td>
                <td><a href="{{ route('genres.edit', $genre->id) }}" class="btn btn-warning">Editar</a>
                    <form style="display: inline;" action="{{ route('genres.destroy', $genre->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Tem certeza que deseja excluir esse genero?')">
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