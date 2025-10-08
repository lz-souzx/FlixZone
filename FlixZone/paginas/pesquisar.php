<?php
include '../src/Conexao.php';

if (isset($_GET['query'])) {
    $query = $_GET['query'];

    $stmt = $pdo->prepare("SELECT * FROM filmes_series WHERE titulo LIKE :query ORDER BY titulo ASC");
    $stmt->execute(['query' => "$query%"]);

    $filmes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($filmes) {
        foreach ($filmes as $filme) {
            echo "<div class='filme-item'>
                    <img src='../img/{$filme['capa']}' alt='Capa' width='50' style='vertical-align:middle; margin-right:10px;'>
                    {$filme['titulo']} ({$filme['ano_lancamento']}) - {$filme['genero']}
                  </div>";
        }
    } else {
        echo "<div class='no-result'>Nenhum filme encontrado.</div>";
    }
}
?>
<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: loginUsuario.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pesquisa de Filmes - FlixZone</title>
    <style>
        #resultados { margin-top: 20px; }
        .filme-item {
            padding: 8px;
            border-bottom: 1px solid #ccc;
            cursor: pointer;
        }
        .filme-item:hover {
            background-color: #f0f0f0;
        }
        .no-result {
            color: red;
            padding: 8px;
        }
    </style>
</head>
<body>
<h2>Bem-vindo, <?= $_SESSION['usuario'] ?></h2>

<input type="text" id="search" placeholder="Digite o nome do filme..." autocomplete="off">
<div id="resultados"></div>

<script>
    document.getElementById('search').addEventListener('keyup', function() {
        let query = this.value;
        let resultados = document.getElementById('resultados');

        if (query.length > 0) {
            fetch('search.php?query=' + encodeURIComponent(query))
                .then(response => response.text())
                .then(data => { resultados.innerHTML = data; });
        } else {
            resultados.innerHTML = '';
        }
    });
</script>
</body>
</html>
