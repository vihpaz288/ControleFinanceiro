<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Conta</th>
                <th scope="col">Data</th>
                <th>Valor</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ganhos as $ganho)
            @foreach ($ganhos->receitas as $item)

                <tr>
                    <td>{{ $ganho->nome }}</td>
                    <td>{{ $ganho->data }}</td>
                    <td>{{ $ganho->valor }}</td>
                    <td>{{ $ganho->descricao }}</td>
                </tr>
            @endforeach
            @endforeach
        </tbody>
    </table>

</body>
</html>
