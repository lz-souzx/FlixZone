<?php

session_start();

$id = $_GET["id"];

array_splice( $_SESSION["filmes"], $id, 1);

header("location: ../pagInicial.php");