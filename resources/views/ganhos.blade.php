<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganhos</title>
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
</style>
<body>
    <nav class="navbar">
        <div class="logo">
            <h1>Controle Financeiro</h1>
        </div>
        <div class="menu">
        <a href="">Imprimir</a>
        <a href="{{route('acesso')}}">Home</a>
            <a href="#">Sair</a>
        </div>
    </nav> 
    <div class="ganhos">
        
    </div>
</body>
</html>