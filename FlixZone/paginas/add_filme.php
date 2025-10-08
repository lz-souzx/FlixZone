<?php
require_once('../src/Conexao.php'); // caminho da tua classe de conexão


// Cria uma instância da conexão
$conexao = new Conexao();
$conn = $conexao->getMysqli();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Diretório onde as imagens serão salvas
    $target_dir = "uploads/";

    // Cria a pasta caso não exista
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Caminho completo do arquivo
    $target_file = $target_dir . basename($_FILES["capa"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Verifica se o arquivo é uma imagem
    $check = getimagesize($_FILES["capa"]["tmp_name"]);
    if ($check === false) {
        echo "<script>alert('O arquivo enviado não é uma imagem válida!');</script>";
        $uploadOk = 0;
    }

    // Verifica o tamanho máximo (2MB)
    if ($_FILES["capa"]["size"] > 2000000) {
        echo "<script>alert('A imagem é muito grande (máx 2MB).');</script>";
        $uploadOk = 0;
    }

    // Formatos de imagem permitidos
    $allowed = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowed)) {
        echo "<script>alert('Apenas imagens JPG, JPEG, PNG e GIF são permitidas.');</script>";
        $uploadOk = 0;
    }

    // Se estiver tudo certo, salva a imagem e cadastra no banco
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["capa"]["tmp_name"], $target_file)) {
            // Dados do formulário
            $titulo = $_POST["titulo"];
            $ano = $_POST["anoLancamento"];
            $genero = $_POST["generoFilme"];
            $capa = $target_dir . basename($_FILES["capa"]["name"]);

            // Prepara e executa o INSERT
            $sql = "INSERT INTO filmes_series (capa, titulo, ano_lancamento, genero) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssis", $capa, $titulo, $ano, $genero);

            if ($stmt->execute()) {
                echo "<script>alert('Filme/Série cadastrado com sucesso!'); window.location.href='pagInicial.php';</script>";
            } else {
                echo "<script>alert('Erro ao cadastrar: " . addslashes($stmt->error) . "');</script>";
            }

            $stmt->close();
        } else {
            echo "<script>alert('Erro ao salvar a imagem na pasta uploads.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Filme/Série</title>
    <link rel="icon" type="image/png" href="../img/Logo FlixZone (1).png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/add_filme.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 d-flex flex-column justify-content-center align-items-center">
                <div id="img">
                    <img src="../img/Logo FlixZone.png" alt="Logo" width="200" height="200">
                </div>
            </div>

            <div class="col-md-12 d-flex flex-column" id="formulario">
                <div id="titulo" class="text-center mb-4">
                    <h1>Cadastre Filmes/Séries</h1>   
                </div>

                <div class="box" id="campos">
                    <form action="add_filme.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="titulo" class="form-label">Título:</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" required>
                        </div>

                        <div class="form-group">
                            <label for="anoLancamento" class="form-label">Ano de Lançamento:</label>
                            <input type="number" class="form-control" id="anoLancamento" name="anoLancamento" required>
                        </div>

                        <div class="form-group">
                            <label for="genero" class="form-label">Gênero:</label>
                            <select name="generoFilme" id="genero" class="form-control" required>
                                <option value="">Selecione uma das opções</option>
                                <option value="Ação">Ação</option>
                                <option value="Comédia">Comédia</option>
                                <option value="Drama">Drama</option>
                                <option value="Ficção Científica">Ficção Científica</option>
                                <option value="Romance">Romance</option>
                                <option value="Terror">Terror</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="capa" class="form-label">Capa do Filme/Série:</label>
                            <input type="file" class="form-control" id="capa" name="capa" accept="image/*" required>
                        </div>

                        <div class="row mt-4" id="btn">
                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-primary btn-block">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
