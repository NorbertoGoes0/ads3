<?php
include_once "../conexao.php";

class AlunoModel
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = $GLOBALS['conexao'];
    }

    public function listarAlunos()
    {
        $sql = "SELECT * FROM aluno";
        $result = mysqli_query($this->conexao, $sql);
        $alunos = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $alunos;
    }

    public function buscarAluno($id)
    {
        $sql = "SELECT * FROM aluno WHERE id = $id";
        $result = mysqli_query($this->conexao, $sql);
        $aluno = mysqli_fetch_assoc($result);
        return $aluno;
    }
}
?>
