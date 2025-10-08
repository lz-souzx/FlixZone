<?php
session_start();
require_once "../src/FSeriesDAO.php";
require_once "../src/FSeries.php";
require_once('../src/Conexao.php'); // para salvar a capa



$dao = new FSeriesDAO();
$conexao = new Conexao();
$conn = $conexao->getMysqli();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registrarFilme'])) {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $ano = $_POST['anoLancamento'];
    $genero = $_POST['generoFilme'];

    $fseries = new FSeries();
    $fseries->setTitulo($titulo);
    $fseries->setAnoLancamento($ano);
    $fseries->setGenero($genero);

    // ==================== TRATAMENTO DA CAPA ====================
    if (!empty($_FILES["capa"]["name"])) {
        $target_dir = "../uploads/";

        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $target_file = $target_dir . basename($_FILES["capa"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES["capa"]["tmp_name"]);
        if ($check === false) {
            echo "<script>alert('O arquivo enviado não é uma imagem válida!');</script>";
            $uploadOk = 0;
        }

        if ($_FILES["capa"]["size"] > 2000000) {
            echo "<script>alert('A imagem é muito grande (máx 2MB).');</script>";
            $uploadOk = 0;
        }

        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($imageFileType, $allowed)) {
            echo "<script>alert('Apenas imagens JPG, JPEG, PNG e GIF são permitidas.');</script>";
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["capa"]["tmp_name"], $target_file)) {
                $fseries->setCapa($target_file);
            } else {
                echo "<script>alert('Erro ao salvar a imagem na pasta uploads.');</script>";
            }
        }
    } else {
        // se não enviar nova capa, mantém a existente
        $fseries->setCapa(""); // ou você pode pegar do banco se quiser manter a anterior
    }

    // ==================== ALTERAÇÃO NO BANCO ====================
    $sucesso = $dao->alterar($id, $fseries);

    if ($sucesso) {
        echo "<script>alert('Alterado com sucesso!'); window.location.href='pagInicial.php';</script>";
    } else {
        echo "<script>alert('Erro ao alterar.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Filmes/Séries</title>
    <link rel="icon" type="image/png" href="../img/Logo FlixZone (1).png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #000;
            margin: 0;
            font-family: Arial, sans-serif;
            color: white;
        }

        .container {
            margin-top: 40px;
            max-width: 500px;
        }

        #logo img {
            display: block;
            margin: 0 auto 20px auto;
            width: 150px;
        }

        form {
            background: #111;
            padding: 20px;
            border-radius: 10px;
        }

        .form-control {
            border-radius: 10px;
            margin-bottom: 15px;
        }

        button {
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div id="logo">
            <img src="../img/Logo FlixZone.png" alt="Logo">
        </div>
        <h1 class="text-center mb-4">Alterar Filmes/Séries</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="id">ID do Filme/Série:</label>
                <input type="number" class="form-control" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
            </div>
            <div class="form-group">
                <label for="anoLancamento">Ano de Lançamento:</label>
                <input type="number" class="form-control" id="anoLancamento" name="anoLancamento" required>
            </div>
            <div class="form-group">
                <label for="genero">Gênero:</label>
                <select name="generoFilme" id="genero" class="form-control" required>
                    <option value="">Selecione</option>
                    <option value="Ação">Ação</option>
                    <option value="Comédia">Comédia</option>
                    <option value="Drama">Drama</option>
                    <option value="Ficção Científica">Ficção Científica</option>
                    <option value="Romance">Romance</option>
                    <option value="Terror">Terror</option>
                </select>
            </div>
            <div class="form-group">
                <label for="capa">Nova capa (opcional):</label>
                <input type="file" class="form-control" id="capa" name="capa" accept="image/*">
            </div>
            <button type="submit" name="registrarFilme" class="btn btn-primary btn-block">Salvar Alterações</button>
        </form>
    </div>
</body>

</html>