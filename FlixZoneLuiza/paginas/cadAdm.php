<?php

    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de login - Adm</title>
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
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center" id="formulario">
                
                <div id="titulo" class="text-center mb-4">
                    <h1>FAÇA O SEU CADASTRO</h1>
                    <p>Cadastro do administrador</p>
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

                    <div class="form-row">
                        <div class="col-3 col-md-4">
                            <label for="ddd" class="form-label">DDD:</label>
                            <select id="ddd" class="form-control">
                                <option value="51">51-RS</option>
                                <option value="21">21-RJ</option>
                                <option value="27">27-ES</option>
                                <option value="31">31-MG</option>
                                <option value="41">41-PR</option>
                                <option value="48">48-SC</option>
                                <option value="11">11-SP</option>
                                <option value="61">61-DF</option>
                                <option value="62">62-GO</option>
                                <option value="63">63-TO</option>
                                <option value="65">65-MT</option>
                                <option value="67">67-MS</option>
                                <option value="68">68-AC</option>
                                <option value="69">69-RO</option>
                                <option value="71">71-BA</option>
                                <option value="79">79-SE</option>
                                <option value="81">81-PE</option>
                                <option value="82">82-AL</option>
                                <option value="83">83-PB</option>
                                <option value="84">84-RN</option>
                                <option value="85">85-CE</option>
                                <option value="86">86-PI</option>
                                <option value="91">91-PA</option>
                                <option value="92">92-AM</option>
                                <option value="95">95-RR</option>
                                <option value="96">96-AP</option>
                                <option value="98">98-MA</option>
                            </select>
                        </div>

                        <div class="col-9 col-md-8">
                            <label for="telefone" class="form-label">Telefone:</label>
                            <input type="text" class="form-control" id="telefone">
                        </div>
                    </div>

                    <div class="row mt-4" id="btn">
                        <div class="col-12">
                            <button class="btn btn-primary btn-block" onclick="window.location.href='pagInicial.php'">Entrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
