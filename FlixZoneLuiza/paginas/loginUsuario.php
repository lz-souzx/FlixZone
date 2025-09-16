<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de login</title>
    <link rel="icon" type="image/png" href="../img/Logo FlixZone (1).png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/pagnsLogin.css">
</head>

<body>
    <div class="container-fluid">
        
        <div class="row">
            
            <!-- COLUNA ESQUERDA (imagem + texto) -->
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                <div id="img">
                    <img src="../img/Logo FlixZone.png" alt="Logo" width="400" height="400">
                </div>
                <div id="texto" class="mt-3 text-center">
                    <h3>Assista ao que você ama, quando e onde quiser.</h3>
                    <br>
                    
                    <p>
                        Explore um catálogo completo de filmes, séries e lançamentos exclusivos, tudo em um só lugar. 
                        Maratone seus títulos favoritos, descubra novas histórias e tenha entretenimento ilimitado com qualidade de cinema na sua tela. 
                        Assine agora e transforme cada momento livre em uma experiência inesquecível!
                    </p>
                </div>
            </div>

            <!-- COLUNA DIREITA (titulo + formulário) -->
            <div class="col-md-6 d-flex flex-column" id="formulario">
                
                <div id="titulo" class="text-center mb-4">
                    <h1>FAÇA O SEU LOGIN</h1>
                    
                </div>

                <div class="box" id="campos">
                    
                    <div class="form-group">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" id="email">
                    </div>

                    <div class="form-group">
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" class="form-control" id="senha">
                    </div>

                

                    <div class="row mt-4" id="btn">
                        <div class="col-12">
                            <button class="btn btn-primary btn-block" onclick="window.location.href='pagInicial.php'">Entrar</button>
                        </div>
                    </div>

                    <div class="row mt-3" id="cad">
                        <div class="col-12">
                            <a href="cadUsuario.php">Não tem cadastro? Clique aqui.</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
