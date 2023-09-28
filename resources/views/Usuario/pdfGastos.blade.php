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
    <h1>Relatório de gastos</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Conta</th>
                <th scope="col">Data</th>
                <th scope="col">Tipo</th>
                <th scope="col">Valor</th>
                <th>Descrição</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gastos as $gasto)
                @foreach ($gasto->despesas as $item)
                    <tr>
                        <td>{{ $gasto->nome }}</td>
                        <td>{{ date('d/m/Y', strtotime($item->data)) }}</td>
                        <td>{{ $item->tipo }}</td>
                        <td>{{ $item->valor }}</td>
                        <td>{{ $item->descricao }}</td>
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
    {{ $valorTotal }}
</body>

</html>
