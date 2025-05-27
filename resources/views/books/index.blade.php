<!-- @extends('layouts.master') -->
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Livros</h1>
    <div class="text-right">
        <a href="{{ route('books.create') }}" class="btn btn-primary">Adicionar Livro</a>
    </div>
   
    <div>
<div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <th>Titulo</th>
                <th>preco</th>
                <th>Data Pub.</th>
                <th>Gênero</th>
                <th>Autor</th>
            </tr>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->titulo }}</td>
                <td>{{ $book->preco }}</td>
                <td>{{ $book->data_pub }}</td>
                <td>{{ $book->genre->nome }}</td>
                <td>{{ $book->author->nome }}</td>
                <td><a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Editar</a>
                    <form style="display: inline;" action="{{ route('books.destroy', $book->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Tem certeza que deseja excluir esse livro?')">
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