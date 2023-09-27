<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Ganhos</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: 'Roboto', sans-serif;
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
            <a href="">Imprimir</a>
            <a href="{{ route('acesso') }}">Home</a>
            <a href="#">Sair</a>
        </div>
    </nav>
    <section>
        <div class="ganhos">
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
                        <tr>
                            <td>{{ $ganho->conta->nome }}</td>
                            <td>{{ $ganho->data }}</td>
                            <td>{{ $ganho->valor }}</td>
                            <td>{{ $ganho->descricao }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>
