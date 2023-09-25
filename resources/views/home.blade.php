<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
    <style>
                @import url('https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        *{
            box-sizing: border-box;
        }

        body{
            margin:0;
            font-family: 'Roboto', sans-serif;
        }

        .navbar{
            display: flex;
            flex-flow: row wrap;
            height: 100px;
            background: white;
            justify-content: center;
            align-items: center;
            position:fixed;
            width: 100%;
        }

        .logo{
            flex:20%;
            margin-left:10%;
            text-align: left;
        
        }

        .logo h1{
            font-family: 'Lobster', cursive;
            color:#008080;
            font-size:30px;
            letter-spacing: 2px;
        }

        .menu{
            flex:70%;
            text-align:right;
            padding:20px;
        }

        .menu a{
            color:#008080;
            text-decoration: none;
            font-size:20px;
            padding:20px 16px; 
            letter-spacing: 3px;
        }

        .menu a:hover{
            color:#2E8B57;
            border-top:4px solid #2E8B57;
            letter-spacing: 3px;
        }

        .header{
            display: flex;
            flex-flow:row wrap;
            justify-content: center;
            align-items: center;
            background: white;
            padding-top:100px;
        }

        .headline{
            margin-left:10%;
            flex:40%;
        }

        .headline h2{
            font-weight: 900;
            font-size:20px;
            color:#008080	;
            padding:0;
            margin:0;
            letter-spacing: 5px;
        }

        .headline p{
            color:gray;
            text-align:left;
            letter-spacing: 3px;
        }

        .contact-btn{
            display: inline-block;
            background: #008080;
            padding:20px;
            color:white;
            text-transform: uppercase;
            border-radius:5px;
            text-decoration: none;
            letter-spacing: 2px;
        }

        .contact-btn:hover{
            background:#2E8B57;
            letter-spacing: 2px;
        }

        .img-headline{
            margin-right:10%;
            flex:40%;
            text-align:center;
        }

        section{
            display: inline-block;
            margin-top:50px;
            margin-left:5%;
            margin-right:5%;
            padding:5%;
            text-align: center;
        }

        section h2{
            width:100%;
            font-size:50px;
            margin:0;
            font-family: 'Lobster', cursive;
            font-weight: bold;
            color:#008080	;
            letter-spacing: 5px;
        }

        .info{
            display: inline-block;
            margin-top:5%;
        }

        .card{
            display: inline-block;
            width: 300px;
            height: 300px;
            padding:20px;
            margin: 15px;
            border-radius:10px;
            cursor:pointer;
            box-shadow: 9px 5px 10px #008080;
            letter-spacing: 2px;
        }

        footer{
            margin-top:100px;
            height: 50px;
            background-image:linear-gradient(180deg,#20B2AA,#008B8B, #008080);
            text-align:center;
            padding: 10px;
            letter-spacing: 2px;
        }

        .whats{
            position: fixed;
            bottom:5px;
            right:5px;
            height: 30px;
            margin-bottom: 20px;
            border-radius: 50px;
        }


        @media screen and (max-width:1005px){
            .navbar{
                position: relative;
            }
            .menu{
                display: none;
            }
            .logo{
                margin:0;
                text-align:center;
            }
            .header{
                padding-top:50px;
            }
            .headline{
                flex:100%;
                margin:5%;
                text-align:center;
            }
            .headline p{
                text-align:center;
            }
            .img-headline{
                flex:100%;
                margin:5%;
                text-align:center;
            }

            .card{
                width:100%;
            }

            .whats{
                display: none;
            }
        }

    </style>
<body>
    <nav class="navbar">
        <div class="logo">
            <h1>Controle Financeiro</h1>
        </div>
        <div class="menu">
            {{-- <a href="{{route('home')}}">Home</a> --}}
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('create')}}">Cadastre-se</a>
        </div>
    </nav>
    <header class="header">
        <div class="headline">
            <h2 style="font-size:80px">Bem vindo!</h2>
            <p>Você está a um passo de ter todo o controle de seus gastos e ganhos.</p>
            <p>Aqui você tem um espaço todo pensado em você, com tudo em suas mãos, fácil de usar <br>
               tomando pouco tempo seu.</p>
            <a href="{{route('create')}}" class="contact-btn">Comece agora</a>
        </div>
        <div class="img-headline">
            <img style="max-width: 90%;" src="https://img.freepik.com/vetores-premium/calculadora-eletronica-sorridente-de-desenho-animado_253349-687.jpg?w=2000">
        </div>
    </header>
    <section>
        <div class="info">
            <h2>Informações</h2>
            <div class="card">
                <div class="card-text">
                    <h3>Um sistema fácil de usar</h3>
                    <p>Aqui é o local que você terá todos seus gastos e ganhos na palma da mão de uma forma fácil de usar.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-text">
                    <h3>Sem precisa pagar por isso</h3>
                    <p>Um sistema totalmente gratuito com tudo o que você precisa para controlar suas finanças para você.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-text">
                    <h3>Sem precisar de dados sensiveis seu</h3>
                    <p>Para isso não necessita informa seus dados bancarios, CPF, endereço e etc, apenas o valor inicial que possui</p>
                </div>
            </div>
            <h2>beneficios</h2>
            <div class="card">
                <div class="card-text">
                    <h3>Saiba o destino de cada centavo</h3>
                    <p>Todas as despezas e ganhos que você teve nós guardamos para você, dessa forma quando quiser basta pegar seu relatorio de gastos e estara tudo em suas mãos em segundo e a qualquer hora</p>
                </div>
            </div>
            <div class="card">
                <div class="card-text">
                    <h3>Economize tempo e dinheiro</h3>
                    <p>Aqui é muito rápido de usar e dizer que gastos você teve. <br>
                   Dessa forma você economiza tempo e dinheiro pois tem um controle dele de forma pratica</p>
                </div>
            </div>
            <div class="card">
                <div class="card-text">
                    <h3>Sua segurança em primeiro lugar</h3>
                    <p>Após se cadastrar apenas você pode ter acesso a sua conta, além disso não sabemos dados sigilosos seu</p>
                </div>
            </div>
            <h2>Recursos</h2>
            <div class="card">
                <div class="card-text">
                    <h3>Cadastro de valores</h3>
                    <p>Quando você cria sua conta é inserido seu valor inicial, durante o tempo que você permanece conosco você cadastra valores que ganhou que são somados com o valor inicial automaticamente</p>
                </div>
            </div>
            <div class="card">
                <div class="card-text">
                    <h3>Cadastro de despesas</h3>
                    <p>
                    Você cadastra todos os gastos que for fazendo, dizendo categoria, datas, e valores, após isso esse valor é descontado no seu saldo</p>
                </div>
            </div>
            <div class="card">
                <div class="card-text">
                    <h3>Relátorios de tudo que for Cadastrado</h3>
                    <p>Todas as despesas e ganhos cadastrados são guardados, e na hora que você quiser pode ver o que gastou, onde e quuando ou o que ganhou, de onde e quando</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <b style="color:white;">© Todos os direitos reservados.</b>
    </footer>
    <a class="whats" target="_blank"
        href="https://api.whatsapp.com/send?phone=5585997931755&text=Ol%C3%A1!%20Vim%20tirar%20uma%20d%C3%BAvida%20sobre%20o%20sistema%20de%20controle%20financeiro."><img
            style="width: 50px;" src="https://play-lh.googleusercontent.com/bYtqbOcTYOlgc6gqZ2rwb8lptHuwlNE75zYJu6Bn076-hTmvd96HH-6v7S0YUAAJXoJN"></a>
</body>

</body>
</html>