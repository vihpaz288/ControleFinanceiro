<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: 'Roboto', sans-serif;
    }

    .container {
        display: inline-block;
        margin-top: 50px;
        margin-left: 5%;
        margin-right: 5%;
        padding: 5%;
        text-align: center;
    }

    .navbar {
        display: flex;
        flex-flow: row wrap;
        height: 100px;
        background: white;
        justify-content: center;
        align-items: center;
        position: fixed;
        width: 100%;
    }

    .logo {
        flex: 20%;
        margin-left: 10%;
        text-align: left;
    }

    .logo h1 {
        font-family: 'Lobster', cursive;
        color: #008080;
        font-size: 30px;
        letter-spacing: 2px;
    }

    .menu {
        flex: 70%;
        text-align: right;
        padding: 20px;
    }

    .menu a {
        color: #008080;
        text-decoration: none;
        font-size: 20px;
        padding: 20px 16px;
        letter-spacing: 3px;
    }

    .menu a:hover {
        color: #2E8B57;
        border-top: 4px solid #2E8B57;
        letter-spacing: 3px;
    }


    input {
        background-color: #ecf0f1;
        display: flex;
        align-items: center;
        margin: 10px;
        margin-left: 170px;
        width: 260px;
        height: 35px;
        border-radius: 5px;
        border: 1px solid #008080;
    }

    .search {
        display: flex;
        flex-flow: row wrap;
        background: white;
        position: fixed;
        margin-left: 300px;
        margin-top: 30px;
        border: 1px solid #008080;

    }

    .searchButton {
        text-align: center;
        letter-spacing: 3px;
        display: flex;
        flex-flow: row wrap;
        background: white;
        position: fixed;
        margin-left: 565px;
        margin-top: 30px;
        border-radius: 5px;
        background: #008080;
        color: white;
        height: 30px;
        width: 100px;
        padding: 5px;
        border: 1px solid #008080;

    }

    .searchButton:hover {
        background: #2E8B57;
        letter-spacing: 2px;
        cursor: pointer;
    }

    .button {
        display: inline-block;
        background: #008080;
        color: white;
        border-radius: 5px;
        margin-left: 400px;
        height: 30px;
        width: 80px;
        margin-top: 10px;
        cursor: pointer;
        border: 1px solid #008080;
        letter-spacing: 2px;

    }

    .button:hover {
        background: #2E8B57;
        letter-spacing: 2px;
    }

    section {
        display: inline-block;
        margin-top: 50px;
        margin-left: 5%;
        margin-right: 5%;
        padding: 5%;
        margin: 100px;
        text-align: center;
        width: 100%;

    }
</style>

<body>
    <nav class="navbar">
        <div class="logo">
           
            <h1>Controle Financeiro</h1>
        </div>
        <div class="menu">
            <a href="{{ route('relatorio') }}">relatorios</a>
            <a href="{{ route('conta') }}">Cadastra Conta</a>
            <a href="{{ route('receita') }}">Cadastra receita</a>
            <a href="{{ route('despesa') }}">Cadastra despesa</a>
            <a href="{{ route('sair') }}">Sair</a>
        </div>
    </nav>
    <section>
        <h2>Saldo atual:{{$valoresContas}}</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Conta</th>
                    <th scope="col">Saldo</th>
                    <th>Deletar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contas as $conta)
                    <tr>
                        <th scope="row">{{ $conta->id }}</th>
                        <td>{{ $conta->nome }}</td>
                        <td>{{ $conta->saldo}}</td>
                        <td>
                            <form action="{{ route('destroy', $conta->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="danger">Deletar</button>
                            </form>
                        </td>
                        <td><a href="{{ route('edit', $conta->id) }}">Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
