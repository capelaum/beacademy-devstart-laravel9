<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Via CEP</title>
</head>

<body>

    <main>
        <h1>Busca por CEP</h1>
        <div>
            <form action="{{ route('viacep.index.post') }}" action="post">
                @csrf
                <input type="text" name="cep" placeholder="CEP" required>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </main>

</body>

</html>
