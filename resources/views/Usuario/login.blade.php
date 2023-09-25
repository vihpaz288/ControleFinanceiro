<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
.Login{
    display: flex;
    flex-flow:row wrap;
    justify-content: center;
    align-items: center;
    background: white;
    padding-top:100px;
}
.Caixa{
    height:300px;
    width: 300px;
    margin-left:5%;
    box-shadow: 9px 5px 10px #008080;
    border-radius: 5px;
    border:2px solid #008080;
}
.Caixa h2{
    font-weight: 900;
    font-size:20px;
    color:#008080	;
    padding:0;
    margin:8px;

}
input{
    background-color: #ecf0f1;
    display: flex;
    align-items: center;
    margin: 10px;
    width:260px;
    height: 30px;
    border-radius:5px;
    border: 1px solid #008080;
}
label{
    margin:8px;
    font-size: 20px;
}
.button{
    display: inline-block;
    background: #008080;
    color:white;
    border-radius:5px;
    margin-left:100px;
    height:30px;
    width:80px;
    margin-top:10px;
    cursor:pointer;
    border: 1px solid #008080;
    letter-spacing: 2px;

}
.button:hover{
    background:#2E8B57;
    letter-spacing: 2px;
}

</style>
<body>
   <nav class="navbar">
        <div class="logo">
            <h1>Controle Financeiro</h1>
        </div>
        <div class="menu">
        {{-- <a href="{{route('home')}}">Home</a> --}}
        <a href="{{route('create')}}">Cadastre-se</a>
        </div>
    </nav> 
    <div class="Login">
        <form action="{{route('autenticacao')}}" method="POST">
        @csrf    
        <div class="Caixa">
           <h2 style="font-size:23px">Insira seu acesso</h2>
           <label for="email">Email:</label>
           <input type="email" name="email">
           <label for="senha">Senha:</label>
           <input type="password" name="password">
           <button type="submit" class="button">ENTRAR</button>
        </div>
        </form>
</div>
</body>
</html>