<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Via CEP</title>
</head>

<body>

    <main>
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
