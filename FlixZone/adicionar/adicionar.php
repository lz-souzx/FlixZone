<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Registro de filmes</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <section id="logo">
    <img src= "imgs/flixzonelogo.png">
    </section>
    <h1 class="text-center" color= "white" class="text-primary">Registrando filmes</h1>

    <style>

    #box{
        display: flex;
        margin-left: 250px;
    }

    div{
        margin-right: 25px;
        margin-left: 25px;
    }

    #btn-apagar{
        cursor: pointer;
        user-select: none;
        transition: 0.2s;
    }

    #btn-apagar:hover{
        text-shadow: 0px 0px 8px red;
            transition: 0.2s;
    }

    body{
        background-image: linear-gradient(to bottom , #000000ff, #98adffff, #393fe2ff);
        margin: 0; 
        height: 100vh; 
    }

    button{
        background-color: #b0d1ffff;
        cursor: pointer;
        text-shadow: 0px 0px 8px black;
        transition: 0,2s;
        border-radius: 10px;

    }

    #registrarFilme{
        background-color: #b0d1ffff;
        cursor: pointer;
        text-shadow: 0px 0px 8px black;
        transition: 0,2s;
        border-radius: 10px;

    }

    #titulo{
        border-radius: 10px;
        
    }

    #anoLancamento{
        border-radius: 10px;
    }

    div{
        text-align: center;
        color: white;
    }

    h1{
        color: white;
    }

    #filmes{
     color: #b0d1ffff;
     background-color: #b0d1ffff;
    }

    img{
        width: 150px;
        height: 150px;
        position: relative;
        max-width: 100%;
    }

    #logo{
        display: flex;
        justify-content: center; 
        align-items: center;
    }
   
   
    
    

    </style>
    
    
    <form action="add_filme.php" method="get">
<div id="box">
    <div>
        <label for="titulo">Título: </label>
        <input type="text" name="titulo" id="titulo" required>

    </div>

    <div>
        <label for="anoLancamento">Ano lançado: </label>
        <input type="number" name="anoLancamento" id="anoLancamento">
    </div>
    
    <div>
        <label for="generoFilme">Gênero: </label>
        <select name="generoFilme" id="generoFilme" required>
            <option value="">Selecione uma das opções</option>
            <option value="acao">ação</option>
            <option value="comedia">comédia</option>
            <option value="drama">drama</option>
            <option value="ficcaocientifica">ficção científica</option>
            <option value="romance">romance</option>
            <option value="terror">terror</option>
        </select>
        
    </div>

</div>
<hr>
    
    <input type="submit" name="registrarFilme" id="registrarFilme" value="Adicionar filme">
    

    </form>
    </body>
</html>