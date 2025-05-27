<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Laravel</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Livewire Styles -->
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Meu Sistema</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ request()->routeIs('genres.*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('genres.index') }}">Generos</a>
                </li>
                <li class="nav-item {{ request()->routeIs('authors.*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('authors.index') }}">Autores</a>
                </li>
                <li class="nav-item {{ request()->routeIs('books.*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('books.index') }}">Livros</a>
                </li>
                <li class="nav-item {{ request()->routeIs('employees.*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('employees.index') }}">Funcionários</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Conteúdo da página -->
    @yield('content')

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Livewire Scripts -->
</body>
</html>