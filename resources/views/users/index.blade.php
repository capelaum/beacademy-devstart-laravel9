<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Lista de Usuários</title>
</head>

<body>
    <main class="container my-5">
        <h1 class="mb-5">Listagem de Usuários</h1>

        <table class="table table-dark table-hover table-striped">
            <thead class="text-center">
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Data de Cadastro</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ date('d/m/Y H:i', strtotime($user->created_at)) }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary text-white">
                            Visualizar
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</body>

</html>
