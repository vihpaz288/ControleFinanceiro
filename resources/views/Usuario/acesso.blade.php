<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"
    integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <input type="hidden" id="_token" value="{{ csrf_token() }}">
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
        <h2>Saldo atual:{{ $valoresContas }}</h2>
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
                    <tr class="tr-conta-{{ $conta->id }}">
                        <th scope="row">{{ $conta->id }}</th>
                        <td>{{ $conta->nome }}</td>
                        <td>{{ $conta->saldo }}</td>
                        <td>
                            <button type="submit" class="danger"
                                onclick="deletarConta({{ $conta->id }})">Deletar</button>
                        </td>
                        <td>
                            <button type="button" onclick="abrirModalCreate({{ $conta->id }})"
                                class="checkout-button">
                                Editar compra
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="modal fade" id="modalEditarConta" tabindex="-1" aria-labelledby="modalEditarConta"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Insira seus dados</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" id="input-nome">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Saldo</label>
                            <input type="text" name="nome" class="form-control" id="input-saldo">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="checkout-button" onclick="editarConta({{ $conta->id}})">Editar</button>
                            <button type="button" class="checkout-button" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
        integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        const _token = $('#_token').val()

        const deletarConta = (id_conta) => {
            $.ajax({
                type: "delete",
                url: `/Conta/delete/${id_conta}`,
                data: {
                    _token
                },
                success: function(response) {
                    $(`.tr-conta-${id_conta}`).remove();

                    iziToast.success({
                        title: 'Sucesso!',
                        message: response.msg
                    });
                },
                error: function(response) {

                    console.log(response);
                    iziToast.warning({
                        title: 'Ops!',
                        message: response.responseJSON.message,
                    });
                }
            });
        }

        const abrirModalCreate = (id_conta) => {

            $('#modalEditarConta').modal('show');

            $.ajax({
                type: "get",
                url: `/Conta/edit/${id_conta}`,
                success: function(response) {
                    console.log(response);
                    $('#input-nome').val(response.conta.nome);
                    $('#input-saldo').val(response.conta.saldo);
                }
            });
        }

        const editarConta = (id_conta) => {
            let nome = $('#input-nome').val();
            let saldo = $('#input-saldo').val();
            $.ajax({
                type: "put",
                url: `/Conta/update/${id_conta}`,
                data: {
                    _token,
                    nome,
                    saldo
                },
                success: function(response){
                    iziToast.success({
                        title: 'Sucesso!',
                        message: response.msg
                    });
                    $('#modalEditarConta').modal('hide');
                }
            })
        }
    </script>
</body>

</html>
