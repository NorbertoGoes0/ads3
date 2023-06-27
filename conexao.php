<?php
$host = "localhost";
$db = "ads3";
$user = "root";
$password = "";

$conexao = mysqli_connect($host, $user, $password, $db);

// Verificar conexão
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
