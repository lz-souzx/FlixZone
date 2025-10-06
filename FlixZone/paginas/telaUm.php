<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/telaUm.css">
    <title>FlixZone</title>
</head>

<body>
    <div class="img-background">
        <div class="overlay">
            <img src="../img/logo sem fundo.png" alt="">

            <p>Escolha o seu perfil de acesso:</p>

            <div class="choice-buttons">
                <button class="btn btn-choice" onclick="window.location.href='loginUsuario.php'">Usuário</button>
                <button class="btn btn-choice" onclick="window.location.href='loginAdm.php'">Administrador</button>
            </div>
        </div>
    </div>


</body>

</html>