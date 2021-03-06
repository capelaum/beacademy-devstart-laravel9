<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="description" content="">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body class="bg-dark text-white">
    <header class="container mt-5 position-relative">
        <a class="btn btn-secondary me-4" href="{{ route('users.index') }}">Listagem de Usuários</a>
        <a class="btn btn-secondary me-4" href="{{ route('users.create') }}">Cadastrar Usuário</a>
        <a class="btn btn-secondary" href="{{ route('posts.index') }}">Posts</a>
        <hr>
    </header>
    <main class="container position-relative">
        <h1 class="my-4">@yield('heading')</h1>

        @yield('main')
    </main>
</body>

</html>
