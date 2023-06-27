<?php
include_once "../models/AlunoModel.php";

$acao = $_GET['acao'];

$alunoModel = new AlunoModel();

if ($acao == "inserir") {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO aluno (nome, sobrenome, email) VALUES ('$nome', '$sobrenome', '$email')";
    mysqli_query($conexao, $sql);

    header("Location: ../views/alunos.php");
} elseif ($acao == "atualizar") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];

    $sql = "UPDATE aluno SET nome = '$nome', sobrenome = '$sobrenome', email = '$email' WHERE id = $id";
    mysqli_query($conexao, $sql);

    header("Location: ../views/alunos.php");
} elseif ($acao == "excluir") {
    $id = $_GET['id'];

    $sql = "DELETE FROM aluno WHERE id = $id";
    mysqli_query($conexao, $sql);

    header("Location: ../views/alunos.php");
}
?>
