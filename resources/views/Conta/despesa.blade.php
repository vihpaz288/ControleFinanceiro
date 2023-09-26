<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>
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

.container{
    display: inline-block;
    margin-top:50px;
    margin-left:5%;
    margin-right:5%;
    padding:5%;
    text-align: center;
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

.valor{
    height:500px;
    width: 600px;
    margin-left:150px;
    box-shadow: 9px 5px 10px #008080;
    border:2px solid #008080;
}
.despesa{
    height:500px;
    width: 600px;
    margin: 60px;
    margin-left:150px;
    box-shadow: 9px 5px 10px #008080;
    border:2px solid #008080;
}
.despesa h2{
    font-weight: 900;
    font-size:20px;
    color:#008080	;
    padding:0;
    margin:8px;

}
.valor h2{
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
    margin-left: 170px;
    width:260px;
    height: 35px;
    border-radius:5px;
    border: 1px solid #008080;
}
.search{
    display: flex;
    flex-flow: row wrap;
    background: white;
    position:fixed;
    margin-left:300px;
    margin-top:30px;
    border:1px solid #008080;

}
.searchButton{
    text-align:center;
    letter-spacing: 3px;
    display: flex;
    flex-flow: row wrap;
    background: white;
    position:fixed;
    margin-left:565px;
    margin-top:30px;
    border-radius:5px;
    background: #008080;
    color:white;
    height: 30px;
    width:100px;
    padding:5px;
    border: 1px solid #008080;

}
.searchButton:hover{
    background:#2E8B57;
    letter-spacing: 2px;
    cursor: pointer;
}
label{
    margin-left:30px;
    font-size: 20px;
    letter-spacing: 2px;

}
.button{
    display: inline-block;
    background: #008080;
    color:white;
    border-radius:5px;
    margin-left:400px;
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

section{
    display: inline-block;
    margin-top:50px;
    margin-left:5%;
    margin-right:5%;
    padding:5%;
    margin:100px;
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

textarea{
    background-color: #ecf0f1;
    display: flex;
    align-items: center;
    margin: 20px;
    margin-left: 160px;
    border-radius:5px;
    border: 1px solid #008080;
}
select{
    background-color: #ecf0f1;
    display: flex;
    align-items: center;
    margin-left: 230px;
    margin-top:10px;
    width:150px;
    border-radius:5px;
    border: 1px solid #008080;
}

</style>
<body>
   <nav class="navbar">
        <div class="logo">
            <h1>Controle Financeiro</h1>
        </div>
        <div class="menu">
            <a href="{{route('acesso')}}">Home</a>
            <a href="{{route('sair')}}">Sair</a>
        </div>
    </nav> 
    <section>
            <div class="valor">
                <h2 style="font-size:23px">Cadastrar despesa:</h2>
                <form action="{{route('store')}}" method="POST">
                @csrf
                <select name="IdContas" class="tipo" id="">
                    <option selected disabled value="">Selecione</option>
                    @foreach ($contas as $conta)
                    <option value="{{$conta->id}}">{{$conta->nome}}</option>
                    @endforeach
                </select><br>
                <label for="data">Data:</label>
                <input type="date" name="data">
                <label class="tipo" for="tipo"> Selecione o tipo </label><br>
                <select name="tipo" class="tipo" id="tipo">
                    <option selected disabled value="">Selecione</option>
                    <option value="lazer">Lazer</option>
                    <option value="essencial">Essencial</option>
                    <option value="emergencia">Emergencia</option>
                </select><br>
                <label for="Valor">Valor:</label>
                <input type="number" name="valor">
                <label for="descricao">Descreva o gasto:</label><br>
                <textarea name="descricao" id="" cols="35" rows="5" name="descricao"></textarea>
                <button type="submit" class="button">Cadastrar</button>
                </form>
            </div>
</body>
</html>