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
            <tr>
                <td>{{ $gasto->conta->nome }}</td>
                <td>{{ $gasto->data }}</td>
                <td>{{ $gasto->tipo }}</td>
                <td>{{ $gasto->valor }}</td>
                <td>{{ $gasto->descricao }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
