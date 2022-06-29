<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>{{ $user->name }}</title>
</head>

<body>
    <main class="container my-5">
        <h1 class="mb-5">Informações de Usuário</h1>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>
                <h6 class="card-subtitle mb-4 text-muted">{{ $user->email }}</h6>
                <strong class="card-text bold">Data de criação</strong>
                <br>
                <span class="card-text">{{ $user->created_at }}</span>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary text-white" role="button">
                    Editar
                </a>
                <a href="#" class="btn btn-danger text-white" role="button">
                    Deletar
                </a>
            </div>
        </div>
    </main>
</body>

</html>
