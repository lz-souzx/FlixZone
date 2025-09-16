<?php

    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <style>  body{
        background-image: linear-gradient(to bottom , #393fe2ff , #000000ff);
        margin: 0; 
        height: 100vh; 
    }
    #adicionarfilmes{ 
        border-radius: 10px;
    }
     div{
            margin-left: 1200px;
    }
    texto{
        color: aquamarine;
    }
    img{
        width: 150px;
        height: 150px;
    }
    #btn-apagar{
        cursor: pointer;
        user-select: none;
        transition: 0.2s;
    }
  
 </style>
</head>
<body>
     <?php
        include ("menu.php");
        ?>
   
    <h1 style="color: white;">Bem Vindo!</h1> 
    <h2 style="color: white;">Filmes e series:</h2>
    <hr>
     <div> <button id="adicionarfilmes" onclick="window.location.href='../crudd'">Adicionar Filmes</button></div>

    <?php if( !isset( $_SESSION["filmes"] ) ) : ?>
      <texto><blockquote>Nenhum filme adicionado</blockquote></texto>
     <img src="imgs/triste.png">
    <?php else: ?>

       
  <table>

    <thead>                     
        <th>|Id|</th>
        <th>|Nome|</th>
        <th>|Lançamento|</th>
        <th>|Gênero|</th>
        <th></th>
    </thead>

        <tbody id="informacoes">
                <?php for( $i=0; $i < count($_SESSION["filmes"]); $i++) : ?>
                <tr>
                <td> <?= $i + 1 ?> </td>
                <td> <?= $_SESSION["filmes"][$i]["titulo"] ?> </td>
                <td> <?= $_SESSION["filmes"][$i]["anoLancamento"] ?></td>
                <td> <?= $_SESSION["filmes"][$i]["generoFilme"] ?></td>
                <td id="btn-apagar" onclick='apagar(    
                "<?= $_SESSION["filmes"][$i]["titulo"] ?>",
                <?= $i ?>
                 )'> ✂️</td>
                </tr>
                <?php endfor ?>
        </tbody>

         </table>
    <button onclick="apagarTudo()">Excluir lista de filmes</button>
    <?php endif ?>

    <script>
        function apagar(nome,id) {
            if( confirm("Excluir " + nome + "?") ) {
                window.location.href="apagar_item.php?id=" + id 
            }
        }
        
        function apagarTudo() {
            if( confirm("Excluir todos os itens abaixo?") ) {
                window.location.href="limpar_lista.php"
            }
        }

     </script>



</body>
</html>