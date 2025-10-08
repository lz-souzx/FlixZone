<?php
session_start();

require_once "../src/FSeriesDAO.php";

$fs_bd = new FSeriesDAO();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <style>
        /* ===== Estilo do corpo ===== */
        body {
            background-color: #0b0c0d; /* fundo escuro */
            font-family: 'Times New Roman', Times, serif;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        /* ===== Centralização do conteúdo ===== */
        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        h1, h2 {
            text-align: center;
            color: #b2c6ee; /* azul claro */
        }

        hr {
            border: 1px solid #106ffd; /* destaque azul */
            margin: 20px 0;
        }

        /* ===== Mensagem de nenhum filme ===== */
        .mensagem {
            color: #b2c6ee; /* azul claro */
            text-align: center;
            font-size: 18px;
            margin-top: 20px;
        }

        /* ===== Tabela de filmes ===== */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #106ffd;
        }

        th {
            background-color: #106ffd; /* azul destaque */
            color: #ffffff;
        }

        td {
            background-color: #0b0c0d; /* fundo escuro */
            color: #b2c6ee; /* azul claro para contraste */
        }

        #btn-apagar {
            cursor: pointer;
            color: #ff4c4c;
            transition: 0.2s;
        }

        #btn-apagar:hover {
            color: #ffffff;
        }

        /* ===== Botão ===== */
        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #106ffd;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.2s;
        }

        button:hover {
            background-color: #b2c6ee;
            color: #0b0c0d;
        }

        /* ===== Imagens ===== */
        img {
            width: 100px;
            height: 150px;
            display: block;
            margin: 20px auto;
        }

    </style>
</head>
<body>
    <?php include("menu.php"); ?>

    <main>
        <h1>Bem Vindo!</h1> 
        <h2>Filmes e séries:</h2>
        <hr>

        <?php if(count($fs_bd->listar()) == 0) : ?>
            <p class="mensagem"><blockquote>Nenhum filme adicionado</blockquote></p>
        <?php else: ?>
            <table>
                <thead>                     
                    <tr>
                        <th>Id</th>
                        <th>Capa</th>
                        <th>Nome</th>
                        <th>Lançamento</th>
                        <th>Gênero</th>
                    </tr>
                </thead>
                <tbody id="informacoes">
                    <?php foreach($fs_bd->listar() as $fs) : ?>
                        <tr>
                            <td><?= $fs[0] ?></td>
                            <td><img src="<?= $fs[1] ?>" alt=""></td>    
                            <td><?= $fs[2] ?></td>
                            <td><?= $fs[3] ?></td>
                            <td><?= $fs[4] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            
        <?php endif ?>
    </main>

    <script>
        function apagar(nome, id) {
            if(confirm("Excluir " + nome + "?")) {
                window.location.href = "apagar_item.php?id=" + id;
            }
        }

        function apagarTudo() {
            if(confirm("Excluir todos os itens abaixo?")) {
                window.location.href = "limpar_lista.php";
            }
        }
    </script>
</body>
</html>
